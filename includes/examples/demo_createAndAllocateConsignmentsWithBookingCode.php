<?php
/*
        This demonstrates how to create and allocate a consignment in DM. It uses
        the default booking code, which will make it choose the cheapest service.

        REMEMBER: You need to set the "myusername" and "mypassword" to your API
        credentials. And remember that they are BOTH case-sensitive.
*/

include "php_v5_client.php";

$svc = new AllocationServiceService("http://test1.metapack.com/api/5.x/services/AllocationService?wsdl",array(
                "login" => "myusername",
                "password" => "mypassword" ) );

// define a default Address obj

$address = new Address();
$address->line1    = "12-16 Laystall Street" ;
$address->line2    = "London" ;
$address->postCode = "EC1R 4PF" ;
$address->countryCode = "GBR" ;

// define an Address obj for the recipient
$addressTo = new Address();
$addressTo->line1    = "11 Castle Drive" ;
$addressTo->line2    = "Reigate, Surrey" ;
$addressTo->postCode = "RH2 8DD" ;
$addressTo->countryCode = "GBR" ;

// define at least one Parcel obj
$parcel1 = new Parcel();
$parcel1->dutyPaid      = 1.1 ;
$parcel1->parcelDepth   = 1.2 ;
$parcel1->parcelHeight  = 1.3 ;
$parcel1->parcelValue   = 1.4 ;
$parcel1->parcelWeight  = 1.5 ;
$parcel1->parcelWidth   = 1.6 ;

// ----------- CONSIGNMENT  -------------------
// define Consignment obj that could be used with the create-and-allocate webservice call
$consignment = new Consignment();
$consignment->maxDimension      = 5;
$consignment->consignmentWeight = 0.75;
$consignment->orderNumber       = "WSPHPNEW005";
$consignment->cardNumber        = "CARDTEST";
$consignment->cartonNumber      = "CARTONTEST";
$consignment->fragileGoodsFlag  = false;
$consignment->custom6           = "This is a message in custom6... !have a nice day!";
//
$consignment->recipientName     = "Harold Humpty";
$consignment->recipientPhone    = "0207 555 1212";
$consignment->recipientContactPhone = "07922 333 123";
//
$consignment->senderName        = "Party Ofone";
$consignment->senderPhone       = "0207 333 2121";
$consignment->senderContactPhone = "07922 111 987";
$consignment->senderCode        = "DEFAULT";                    // warehouse sender
// put the parcel(s) in an array so that it can be set inside the consignment obj
$arrParcs[] = $parcel1;
$consignment->parcels = $arrParcs;
$consignment->parcelCount = count($arrParcs);
$consignment->senderAddress = $address;
$consignment->recipientAddress = $addressTo;

// The call we're about to make takes an array of consignments (i.e. a batch).
$arrCons[] = $consignment;

// Here we make our call
$arrResponse = $svc -> createAndAllocateConsignmentsWithBookingCode( $arrCons , "" , false );

// We will go through the consignments in the response (one in this case), showing which carrier got it
foreach( $arrResponse as $cons ) {
        echo "Order: " . $cons->orderNumber . "\n";
        echo "DMC: " . $cons->consignmentCode . "\n";
        echo "Carrier: " . $cons->carrierCode . "\n";
}


?>

