<?php
require("pipeline/vendor/autoload.php");
include "php_includes/php_v5_client.php";
include "php_includes/requests.php";

use League\Pipeline\Pipeline;

class Init{
    public function __invoke($crdentials)
    {
		$svc = new ManifestServiceService($crdentials['endpoint'],array(
						"login" => $crdentials['username'],
						"password" => $crdentials['password'] ) );
        return $svc;
    }	
	
}
class FindManifest{
	
	private $carrierCode = "DHLINT";
	private $warehouseCode = "Dantherm";
	private $transactionType = "delivery";
	private $dateFrom = null;
	private $dateTo =   null;
	private $manifestGroupCode = "";
	
    public function __invoke($svc)
    {
		$datetime = date("Y-m-d H:i:s");
		$timestamp = strtotime($datetime);
		
		$this->dateTo = date(DateTime::ISO8601, $timestamp);
		$this->dateTo  = str_replace("+0000", "+02:00", $this->dateTo);
		
		
		$time = $timestamp - (1 * 60 * 60);	
		$this->dateFrom =  date(DateTime::ISO8601, $time);
		$this->dateFrom  = str_replace("+0000", "+02:00", $this->dateFrom);
		
		$findManifest = $svc->findManifests($this->carrierCode, $this->warehouseCode, $this->transactionType
											, $this->manifestGroupCode, $this->dateFrom, $this->dateTo);
        return array("svc"=>$svc, "manifests"=>$findManifest);
    }	
	
}
class FindManifestConsignments{

    public function __invoke($payload)
    {
		$result = array();
		$svc = $payload["svc"];
		$manifests = $payload["manifests"];
		foreach($manifests as $manifest){
			$consignments = $svc->findConsignmentsOnManifest($manifest->manifestCode);
			# stimulate status transition
			foreach($consignments as $consignment){
				$consignment->status = "Awaiting Collection";
				$result[] =  $consignment;
			}
			//$result[] = $consignments;						
		}
        return $result;
    }	
	
}
class DHLTrack{

	private $username = "egisticsltdGB";
	private $password = "C$7rA!8kK^1i";
    public function __invoke($payload)
    {
		$carrierConsignmentCode = array();
		foreach($payload as $index=>$cons_object){
			$carrierConsignmentCode[] = $cons_object->carrierConsignmentCode;
			# stimulate status transition
			$cons_object->status = "Collected";
		}
		$request = new Request($this->username, $this->password);
		$message_time  = date(DateTime::ISO8601);
		$message_time  = str_replace("+0000", "Z", $message_time);
		$carrierConsignmentCode_format = json_encode($carrierConsignmentCode,true);
		$request_body = "{
			\"trackShipmentRequest\": {
				\"trackingRequest\": {
					\"TrackingRequest\": {
						\"Request\": {
							\"ServiceHeader\": {
								\"MessageTime\": \"$message_time\",
								\"MessageReference\": \"796ab310ba5311e38d9ffb21b7e57543\"
							}
						},
						\"AWBNumber\": {
							\"ArrayOfAWBNumberItem\": $carrierConsignmentCode_format
						},
						\"LevelOfDetails\": \"ALL_CHECK_POINTS\",
						\"PiecesEnabled\": \"B\"
					}
				}
			}
		}";
		$response = $request->post_response(array(), $request_body, "TrackingRequest");	
        return $payload;
    }	
	
}
$pipeline = (new Pipeline)
    ->pipe(new Init) 
    ->pipe(new FindManifest)
	->pipe(new FindManifestConsignments)
	->pipe(new DHLTrack);

try{
	$res = $pipeline->process(array("endpoint"=>"http://dm-api.metapack.com/api/5.x/services/ManifestService?wsdl", 
									"username"=>"pramsay", "password"=>"Boston5858!"));
	print_r($res );
} catch(LogicException $e) {
    print_r($e);
}