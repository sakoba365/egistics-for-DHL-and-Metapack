<?php
class DateRange {
  public $from; // dateTime
  public $to; // dateTime
}

class Product {
  public $countryOfOrigin; // string
  public $fabricContent; // string
  public $harmonisedProductCode; // string
  public $miscellaneousInfo; // ArrayOf_soapenc_string
  public $productCode; // string
  public $productDescription; // string
  public $productQuantity; // long
  public $productTypeDescription; // string
  public $totalProductValue; // double
  public $unitProductWeight; // double
}

class Parcel {
  public $CODParcelAmount; // double
  public $cartonId; // string
  public $code; // string
  public $destinationReference; // string
  public $dutyPaid; // double
  public $number; // int
  public $originReference; // string
  public $outerConsignmentCode; // string
  public $outerParcelNumber; // int
  public $packageTypeCode; // string
  public $parcelDepth; // double
  public $parcelHeight; // double
  public $parcelPrintStatus; // string
  public $parcelValue; // double
  public $parcelWeight; // double
  public $parcelWidth; // double
  public $products; // ArrayOf_tns1_Product
  public $recipientReference; // string
  public $reference; // string
  public $senderReference; // string
  public $trackingCode; // string
  public $trackingUrl; // string
}

class Property {
  public $propertyName; // string
  public $propertyValue; // string
}

class Address {
  public $companyName; // string
  public $countryCode; // string
  public $floor; // string
  public $line1; // string
  public $line2; // string
  public $line3; // string
  public $line4; // string
  public $postCode; // string
  public $region; // string
  public $streetName; // string
  public $streetNo; // string
  public $streetType; // string
  public $town; // string
  public $type; // string
}

class VerifiedAddress {
  public $changedCompanyName; // boolean
  public $changedCountryCode; // boolean
  public $changedFloor; // boolean
  public $changedLine1; // boolean
  public $changedLine2; // boolean
  public $changedLine3; // boolean
  public $changedLine4; // boolean
  public $changedPostCode; // boolean
  public $changedRegion; // boolean
  public $changedStreetName; // boolean
  public $changedStreetNo; // boolean
  public $changedStreetType; // boolean
  public $changedTown; // boolean
  public $status; // string
}

class Consignment {
  public $CODAmount; // double
  public $CODFlag; // boolean
  public $CODPaymentTypeCode; // string
  public $CODSpecialInstruction; // string
  public $CODSurcharge; // double
  public $alreadyPalletisedGoodsFlag; // boolean
  public $cardNumber; // string
  public $carrierCode; // string
  public $carrierConsignmentCode; // string
  public $carrierName; // string
  public $carrierServiceCode; // string
  public $carrierServiceName; // string
  public $carrierServiceVATRate; // double
  public $cartonNumber; // string
  public $cashOnDeliveryCurrency; // string
  public $committedCollectionWindow; // DateRange
  public $committedDeliveryWindow; // DateRange
  public $consDestinationReference; // string
  public $consOriginReference; // string
  public $consRecipientReference; // string
  public $consReference; // string
  public $consSenderReference; // string
  public $consignmentCode; // string
  public $consignmentLevelDetailsFlag; // boolean
  public $consignmentValue; // double
  public $consignmentValueCurrencyCode; // string
  public $consignmentValueCurrencyRate; // double
  public $consignmentWeight; // double
  public $custom1; // string
  public $custom10; // string
  public $custom2; // string
  public $custom3; // string
  public $custom4; // string
  public $custom5; // string
  public $custom6; // string
  public $custom7; // string
  public $custom8; // string
  public $custom9; // string
  public $customsDocumentationRequired; // boolean
  public $cutOffDate; // dateTime
  public $despatchDate; // dateTime
  public $earliestDeliveryDate; // dateTime
  public $endVatNumber; // string
  public $fragileGoodsFlag; // boolean
  public $guaranteedDeliveryDate; // dateTime
  public $hazardCodes; // ArrayOf_soapenc_string
  public $hazardousGoodsFlag; // boolean
  public $insuranceValue; // double
  public $insuranceValueCurrencyCode; // string
  public $insuranceValueCurrencyRate; // double
  public $languageCode; // string
  public $liquidGoodsFlag; // boolean
  public $manifestGroupCode; // string
  public $maxDimension; // double
  public $metaCampaignKey; // string
  public $metaCustomerKey; // string
  public $moreThanOneMetreGoodsFlag; // boolean
  public $moreThanTwentyFiveKgGoodsFlag; // boolean
  public $orderDate; // dateTime
  public $orderNumber; // string
  public $orderValue; // double
  public $parcelCount; // int
  public $parcels; // ArrayOf_tns1_Parcel
  public $pickTicketNumber; // string
  public $pickupPoint; // string
  public $podRequired; // string
  public $properties; // ArrayOf_tns1_Property
  public $recipientAddress; // Address
  public $recipientCode; // string
  public $recipientContactPhone; // string
  public $recipientEmail; // string
  public $recipientFirstName; // string
  public $recipientLastName; // string
  public $recipientMobilePhone; // string
  public $recipientName; // string
  public $recipientNotificationType; // string
  public $recipientPhone; // string
  public $recipientTimeZone; // string
  public $recipientTitle; // string
  public $recipientVatNumber; // string
  public $returnAddress; // Address
  public $returnEmail; // string
  public $returnFirstName; // string
  public $returnLastName; // string
  public $returnMobile; // string
  public $returnName; // string
  public $returnPhone; // string
  public $returnTitle; // string
  public $senderAddress; // Address
  public $senderCode; // string
  public $senderContactPhone; // string
  public $senderEmail; // string
  public $senderFirstName; // string
  public $senderLastName; // string
  public $senderMobilePhone; // string
  public $senderName; // string
  public $senderNotificationType; // string
  public $senderPhone; // string
  public $senderTimeZone; // string
  public $senderTitle; // string
  public $senderVatNumber; // string
  public $shipmentTypeCode; // string
  public $shippingAccount; // string
  public $shippingCharge; // double
  public $shippingChargeCurrencyCode; // string
  public $shippingChargeCurrencyRate; // double
  public $shippingCost; // double
  public $shippingCostCurrencyCode; // string
  public $shippingCostCurrencyRate; // double
  public $signatoryOnCustoms; // string
  public $specialInstructions1; // string
  public $specialInstructions2; // string
  public $startVatNumber; // string
  public $status; // string
  public $taxAndDuty; // double
  public $taxAndDutyCurrencyCode; // string
  public $taxAndDutyCurrencyRate; // double
  public $taxAndDutyStatusText; // string
  public $taxDutyDeclarationCurrencyCode; // string
  public $termsOfTradeCode; // string
  public $transactionType; // string
  public $twoManLiftFlag; // boolean
}

class WorkingDays {
  public $friday; // boolean
  public $monday; // boolean
  public $saturday; // boolean
  public $sunday; // boolean
  public $thursday; // boolean
  public $tuesday; // boolean
  public $wednesday; // boolean
}

class AllocationFilter {
  public $acceptableCarrierCodes; // ArrayOf_soapenc_string
  public $acceptableCarrierServiceCodes; // ArrayOf_soapenc_string
  public $acceptableCarrierServiceGroupCodes; // ArrayOf_soapenc_string
  public $acceptableCarrierServiceTypeCodes; // ArrayOf_soapenc_string
  public $acceptableCollectionDays; // WorkingDays
  public $acceptableCollectionSlots; // ArrayOf_tns1_DateRange
  public $acceptableDeliveryDays; // WorkingDays
  public $acceptableDeliverySlots; // ArrayOf_tns1_DateRange
  public $allocationSchemeCode; // string
  public $expandGroups; // boolean
  public $filterGroup1; // int
  public $filterGroup2; // int
  public $filterGroup3; // int
  public $firstCollectionOnly; // boolean
  public $maxAnalysisDayCount; // int
  public $maxCost; // double
  public $maxDatesPerService; // int
  public $maxScore; // double
  public $minScore; // double
  public $preFilterSortOrder1; // int
  public $preFilterSortOrder2; // int
  public $preFilterSortOrder3; // int
  public $sortOrder1; // int
  public $sortOrder2; // int
  public $sortOrder3; // int
  public $unacceptableCarrierCodes; // ArrayOf_soapenc_string
  public $unacceptableCarrierServiceCodes; // ArrayOf_soapenc_string
  public $unacceptableCarrierServiceGroupCodes; // ArrayOf_soapenc_string
  public $unacceptableCarrierServiceTypeCodes; // ArrayOf_soapenc_string
  public $unacceptableCollectionDays; // WorkingDays
  public $unacceptableCollectionSlots; // ArrayOf_tns1_DateRange
  public $unacceptableDeliveryDays; // WorkingDays
  public $unacceptableDeliverySlots; // ArrayOf_tns1_DateRange
}

class DeliveryOption {
  public $bookingCode; // string
  public $carrierCode; // string
  public $carrierCustom1; // string
  public $carrierCustom2; // string
  public $carrierCustom3; // string
  public $carrierServiceCode; // string
  public $carrierServiceTypeCode; // string
  public $collectionSlots; // ArrayOf_tns1_DateRange
  public $collectionWindow; // DateRange
  public $cutOffDateTime; // dateTime
  public $deliveryLocation; // string
  public $deliverySlots; // ArrayOf_tns1_DateRange
  public $deliveryWindow; // DateRange
  public $groupCodes; // ArrayOf_soapenc_string
  public $name; // string
  public $nominatableCollectionSlot; // boolean
  public $nominatableDeliverySlot; // boolean
  public $recipientTimeZone; // string
  public $score; // double
  public $senderTimeZone; // string
  public $shippingCharge; // double
  public $shippingCost; // double
  public $taxAndDuty; // double
  public $taxAndDutyStatusText; // string
  public $vatRate; // double
}

class ConsignmentBatch {
  public $allocationFilter; // AllocationFilter
  public $bookingCode; // string
  public $calculateTaxAndDuty; // boolean
  public $consignment; // Consignment
}

class ConsignmentBatchResults {
  public $consignment; // Consignment
  public $errorCode; // string
  public $errorMsg; // string
}

class Paperwork {
  public $documents; // base64Binary
  public $labels; // base64Binary
}

class DespatchedConsignment {
  public $consignment; // Consignment
  public $paperwork; // Paperwork
}

class UpdateField {
  public $field; // string
  public $value; // string
}

class TaxAndDuty {
  public $properties; // ArrayOf_tns1_Property
  public $taxAndDuty; // double
  public $taxAndDutyCurrencyCode; // string
  public $taxAndDutyCurrencyRate; // double
  public $taxAndDutyStatusText; // string
}

class ConsignmentActionResult {
  public $consignmentCode; // string
  public $errorCode; // string
  public $reference; // string
  public $text; // string
}

class AuditRecord {
  public $date; // dateTime
  public $text; // string
  public $userId; // string
}

class ParcelTrackingItem {
  public $acheivedDateTime; // dateTime
  public $parcelStatusName; // string
  public $statusText; // string
}

class ParcelTrackingInfo {
  public $code; // string
  public $items; // ArrayOf_tns1_ParcelTrackingItem
  public $number; // int
  public $parcelStatusName; // string
  public $statusText; // string
}

class ConsignmentTrackingInfo {
  public $carrierConsignmentCode; // string
  public $consignmentCode; // string
  public $parcels; // ArrayOf_tns1_ParcelTrackingInfo
}

class ParcelStatusHistory {
  public $achievedDateTime; // dateTime
  public $carrierReasonCode; // string
  public $carrierStatusCode; // string
  public $consignmentCode; // string
  public $depotAchievingStatus; // string
  public $parcelStatusDesc; // string
  public $parcelStatusText; // string
  public $timeApplied; // dateTime
}

class CodeName {
  public $code; // string
  public $name; // string
}

class CodeNameDescription {
  public $code; // string
  public $description; // string
  public $name; // string
}

class CarrierService {
  public $code; // string
  public $name; // string
}

class Manifest {
  public $carrierCode; // string
  public $consignmentCount; // int
  public $createdDateTime; // dateTime
  public $manifestCode; // string
  public $manifestGroupCode; // string
  public $manifestStatus; // string
  public $sentDateTime; // dateTime
}

class ReadyToManifestInfo {
  public $carrierCode; // string
  public $consignmentCount; // int
  public $manifestGroupCode; // string
  public $parcelCount; // int
}











/**
 * AllocationServiceService class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class AllocationServiceService extends SoapClient {

  private static $classmap = array(
                                    'DateRange' => 'DateRange',
                                    'Product' => 'Product',
                                    'Parcel' => 'Parcel',
                                    'Property' => 'Property',
                                    'Address' => 'Address',
                                    'VerifiedAddress' => 'VerifiedAddress',
                                    'Consignment' => 'Consignment',
                                    'WorkingDays' => 'WorkingDays',
                                    'AllocationFilter' => 'AllocationFilter',
                                    'DeliveryOption' => 'DeliveryOption',
                                    'ConsignmentBatch' => 'ConsignmentBatch',
                                    'ConsignmentBatchResults' => 'ConsignmentBatchResults',
                                    'Paperwork' => 'Paperwork',
                                    'DespatchedConsignment' => 'DespatchedConsignment',
                                   );

  public function AllocationServiceService($wsdl = "http://www.metapack.com/devcentre/sites/default/files/wsdl/5.x/AllocationService.wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param ArrayOf_soapenc_string $consignmentCodes
   * @return ArrayOf_soapenc_string
   */
  public function deallocate($consignmentCodes) {
    return $this->__soapCall('deallocate', array($consignmentCodes),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param Consignment $consignment
   * @param AllocationFilter $filter
   * @param boolean $calculateTaxAndDuty
   * @return ArrayOf_tns1_DeliveryOption
   */
  public function findDeliveryOptions(Consignment $consignment, AllocationFilter $filter, $calculateTaxAndDuty) {
    return $this->__soapCall('findDeliveryOptions', array($consignment, $filter, $calculateTaxAndDuty),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param Consignment $consignment
   * @param string $bookingCode
   * @param boolean $calculateTaxAndDuty
   * @return ArrayOf_tns1_DeliveryOption
   */
  public function findDeliveryOptionsWithBookingCode(Consignment $consignment, $bookingCode, $calculateTaxAndDuty) {
    return $this->__soapCall('findDeliveryOptionsWithBookingCode', array($consignment, $bookingCode, $calculateTaxAndDuty),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @param AllocationFilter $filter
   * @param boolean $calculateTaxAndDuty
   * @return ArrayOf_tns1_DeliveryOption
   */
  public function findDeliveryOptionsForConsignment($consignmentCode, AllocationFilter $filter, $calculateTaxAndDuty) {
    return $this->__soapCall('findDeliveryOptionsForConsignment', array($consignmentCode, $filter, $calculateTaxAndDuty),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @param string $bookingCode
   * @param boolean $calculateTaxAndDuty
   * @return ArrayOf_tns1_DeliveryOption
   */
  public function findDeliveryOptionsForConsignmentWithBookingCode($consignmentCode, $bookingCode, $calculateTaxAndDuty) {
    return $this->__soapCall('findDeliveryOptionsForConsignmentWithBookingCode', array($consignmentCode, $bookingCode, $calculateTaxAndDuty),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_tns1_Consignment $consignments
   * @param AllocationFilter $filter
   * @param boolean $calculateTaxAndDuty
   * @return ArrayOf_tns1_Consignment
   */
  public function createAndAllocateConsignments($consignments, AllocationFilter $filter, $calculateTaxAndDuty) {
    return $this->__soapCall('createAndAllocateConsignments', array($consignments, $filter, $calculateTaxAndDuty),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_tns1_Consignment $consignments
   * @param string $bookingCode
   * @param boolean $calculateTaxAndDuty
   * @return ArrayOf_tns1_Consignment
   */
  public function createAndAllocateConsignmentsWithBookingCode($consignments, $bookingCode, $calculateTaxAndDuty) {
    return $this->__soapCall('createAndAllocateConsignmentsWithBookingCode', array($consignments, $bookingCode, $calculateTaxAndDuty),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_tns1_ConsignmentBatch $consignmentBatch
   * @return ArrayOf_tns1_ConsignmentBatchResults
   */
  public function batchCreateAndAllocateConsignments($consignmentBatch) {
    return $this->__soapCall('batchCreateAndAllocateConsignments', array($consignmentBatch),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @param AllocationFilter $filter
   * @param boolean $recalculateTaxAndDuty
   * @return Consignment
   */
  public function verifyAllocation($consignmentCode, AllocationFilter $filter, $recalculateTaxAndDuty) {
    return $this->__soapCall('verifyAllocation', array($consignmentCode, $filter, $recalculateTaxAndDuty),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_soapenc_string $consignmentCodes
   * @param AllocationFilter $filter
   * @param boolean $calculateTaxAndDuty
   * @return ArrayOf_tns1_Consignment
   */
  public function allocateConsignments($consignmentCodes, AllocationFilter $filter, $calculateTaxAndDuty) {
    return $this->__soapCall('allocateConsignments', array($consignmentCodes, $filter, $calculateTaxAndDuty),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_soapenc_string $consignmentCodes
   * @param string $bookingCode
   * @param boolean $calculateTaxAndDuty
   * @return ArrayOf_tns1_Consignment
   */
  public function allocateConsignmentsWithBookingCode($consignmentCodes, $bookingCode, $calculateTaxAndDuty) {
    return $this->__soapCall('allocateConsignmentsWithBookingCode', array($consignmentCodes, $bookingCode, $calculateTaxAndDuty),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param Consignment $consignment
   * @param AllocationFilter $allocationFilter
   * @param boolean $calculateTaxAndDuty
   * @param ArrayOf_tns1_Property $parameters
   * @return DespatchedConsignment
   */
  public function despatchConsignment(Consignment $consignment, AllocationFilter $allocationFilter, $calculateTaxAndDuty, $parameters) {
    return $this->__soapCall('despatchConsignment', array($consignment, $allocationFilter, $calculateTaxAndDuty, $parameters),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param Consignment $consignment
   * @param string $bookingCode
   * @param boolean $calculateTaxAndDuty
   * @param ArrayOf_tns1_Property $parameters
   * @return DespatchedConsignment
   */
  public function despatchConsignmentWithBookingCode(Consignment $consignment, $bookingCode, $calculateTaxAndDuty, $parameters) {
    return $this->__soapCall('despatchConsignmentWithBookingCode', array($consignment, $bookingCode, $calculateTaxAndDuty, $parameters),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @param string $bookingCode
   * @param boolean $recalculateTaxAndDuty
   * @return Consignment
   */
  public function verifyAllocationWithBookingCode($consignmentCode, $bookingCode, $recalculateTaxAndDuty) {
    return $this->__soapCall('verifyAllocationWithBookingCode', array($consignmentCode, $bookingCode, $recalculateTaxAndDuty),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

}

/**
 * ConsignmentServiceService class
 * 
 * Operations for finding consignments 
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class ConsignmentServiceService extends SoapClient {

  private static $classmap = array(
                                    'UpdateField' => 'UpdateField',
                                    'DateRange' => 'DateRange',
                                    'Product' => 'Product',
                                    'Parcel' => 'Parcel',
                                    'Property' => 'Property',
                                    'Address' => 'Address',
                                    'VerifiedAddress' => 'VerifiedAddress',
                                    'Consignment' => 'Consignment',
                                    'TaxAndDuty' => 'TaxAndDuty',
                                    'ConsignmentActionResult' => 'ConsignmentActionResult',
                                    'AuditRecord' => 'AuditRecord',
                                    'Paperwork' => 'Paperwork',
                                   );

  public function ConsignmentServiceService($wsdl = "http://www.metapack.com/devcentre/sites/default/files/wsdl/5.x/ConsignmentService.wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @param ArrayOf_tns1_UpdateField $updateFields
   * @return Consignment
   */
  public function update($consignmentCode, $updateFields) {
    return $this->__soapCall('update', array($consignmentCode, $updateFields),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @return TaxAndDuty
   */
  public function calculateTaxAndDuty($consignmentCode) {
    return $this->__soapCall('calculateTaxAndDuty', array($consignmentCode),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @return boolean
   */
  public function deleteConsignment($consignmentCode) {
    return $this->__soapCall('deleteConsignment', array($consignmentCode),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_tns1_Consignment $consignments
   * @return boolean
   */
  public function validateConsignments($consignments) {
    return $this->__soapCall('validateConsignments', array($consignments),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_tns1_Consignment $consignments
   * @return ArrayOf_tns1_Consignment
   */
  public function createConsignments($consignments) {
    return $this->__soapCall('createConsignments', array($consignments),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_tns1_Consignment $consignments
   * @return ArrayOf_tns1_Consignment
   */
  public function updateConsignments($consignments) {
    return $this->__soapCall('updateConsignments', array($consignments),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_soapenc_string $consignmentCodes
   * @return boolean
   */
  public function markConsignmentsAsReadyToManifest($consignmentCodes) {
    return $this->__soapCall('markConsignmentsAsReadyToManifest', array($consignmentCodes),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_soapenc_string $consignmentCodes
   * @return boolean
   */
  public function markConsignmentsAsPrinted($consignmentCodes) {
    return $this->__soapCall('markConsignmentsAsPrinted', array($consignmentCodes),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @param ArrayOf_tns1_Parcel $parcels
   * @param boolean $recalculateTaxAndDuty
   * @return ArrayOf_tns1_Parcel
   */
  public function appendParcelsToConsignment($consignmentCode, $parcels, $recalculateTaxAndDuty) {
    return $this->__soapCall('appendParcelsToConsignment', array($consignmentCode, $parcels, $recalculateTaxAndDuty),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @param int $parcelNumber
   * @param ArrayOf_tns1_Product $products
   * @param boolean $recalculateTaxAndDuty
   * @return boolean
   */
  public function packProductsToParcel($consignmentCode, $parcelNumber, $products, $recalculateTaxAndDuty) {
    return $this->__soapCall('packProductsToParcel', array($consignmentCode, $parcelNumber, $products, $recalculateTaxAndDuty),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @param int $parcelNumber
   * @param ArrayOf_tns1_Product $products
   * @param boolean $recalculateTaxAndDuty
   * @return boolean
   */
  public function unpackProductsFromParcel($consignmentCode, $parcelNumber, $products, $recalculateTaxAndDuty) {
    return $this->__soapCall('unpackProductsFromParcel', array($consignmentCode, $parcelNumber, $products, $recalculateTaxAndDuty),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $innerConsignmentCode
   * @param int $innerParcelNumber
   * @param string $outerConsignmentCode
   * @param int $outerParcelNumber
   * @return boolean
   */
  public function addInnerToOuter($innerConsignmentCode, $innerParcelNumber, $outerConsignmentCode, $outerParcelNumber) {
    return $this->__soapCall('addInnerToOuter', array($innerConsignmentCode, $innerParcelNumber, $outerConsignmentCode, $outerParcelNumber),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $innerConsignmentCode
   * @param int $innerParcelNumber
   * @return boolean
   */
  public function removeInnerFromOuter($innerConsignmentCode, $innerParcelNumber) {
    return $this->__soapCall('removeInnerFromOuter', array($innerConsignmentCode, $innerParcelNumber),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_soapenc_string $consignmentCodes
   * @param string $manifestGroupCode
   * @return boolean
   */
  public function addConsignmentsToGroup($consignmentCodes, $manifestGroupCode) {
    return $this->__soapCall('addConsignmentsToGroup', array($consignmentCodes, $manifestGroupCode),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_soapenc_string $consignmentCodes
   * @return boolean
   */
  public function removeConsignmentsFromGroup($consignmentCodes) {
    return $this->__soapCall('removeConsignmentsFromGroup', array($consignmentCodes),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_soapenc_string $consignmentCodes
   * @param string $reasonCode
   * @param string $reason
   * @return ArrayOf_tns1_ConsignmentActionResult
   */
  public function voidConsignments($consignmentCodes, $reasonCode, $reason) {
    return $this->__soapCall('voidConsignments', array($consignmentCodes, $reasonCode, $reason),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @return ArrayOf_tns1_AuditRecord
   */
  public function findConsignmentAuditRecords($consignmentCode) {
    return $this->__soapCall('findConsignmentAuditRecords', array($consignmentCode),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @param int $parcelNo
   * @param boolean $recalculateTaxAndDuty
   * @return boolean
   */
  public function deleteParcelFromConsignment($consignmentCode, $parcelNo, $recalculateTaxAndDuty) {
    return $this->__soapCall('deleteParcelFromConsignment', array($consignmentCode, $parcelNo, $recalculateTaxAndDuty),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @param string $cartonId
   * @param boolean $recalculateTaxAndDuty
   * @return boolean
   */
  public function deleteParcelFromConsignmentWithCartonId($consignmentCode, $cartonId, $recalculateTaxAndDuty) {
    return $this->__soapCall('deleteParcelFromConsignmentWithCartonId', array($consignmentCode, $cartonId, $recalculateTaxAndDuty),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $orderNumber
   * @param string $manifestGroupCode
   * @return boolean
   */
  public function scanOrderToManifestGroup($orderNumber, $manifestGroupCode) {
    return $this->__soapCall('scanOrderToManifestGroup', array($orderNumber, $manifestGroupCode),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $cartonId
   * @param string $manifestGroupCode
   * @return boolean
   */
  public function scanCartonToManifestGroup($cartonId, $manifestGroupCode) {
    return $this->__soapCall('scanCartonToManifestGroup', array($cartonId, $manifestGroupCode),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $cartonId
   * @return boolean
   */
  public function markCartonReadyToManifest($cartonId) {
    return $this->__soapCall('markCartonReadyToManifest', array($cartonId),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $cartonId
   * @return boolean
   */
  public function markCartonPrinted($cartonId) {
    return $this->__soapCall('markCartonPrinted', array($cartonId),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @param int $parcelNumber
   * @param ArrayOf_tns1_Property $parameters
   * @return Paperwork
   */
  public function createPaperworkForParcel($consignmentCode, $parcelNumber, $parameters) {
    return $this->__soapCall('createPaperworkForParcel', array($consignmentCode, $parcelNumber, $parameters),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_soapenc_string $consignmentCodes
   * @param ArrayOf_tns1_Property $parameters
   * @return Paperwork
   */
  public function createPaperworkForConsignments($consignmentCodes, $parameters) {
    return $this->__soapCall('createPaperworkForConsignments', array($consignmentCodes, $parameters),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @param int $parcelCount
   * @param ArrayOf_tns1_Property $parameters
   * @return Paperwork
   */
  public function createNextPaperworkForConsignment($consignmentCode, $parcelCount, $parameters) {
    return $this->__soapCall('createNextPaperworkForConsignment', array($consignmentCode, $parcelCount, $parameters),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @param string $cartonId
   * @param ArrayOf_tns1_Property $parameters
   * @return Paperwork
   */
  public function createPaperworkForCarton($consignmentCode, $cartonId, $parameters) {
    return $this->__soapCall('createPaperworkForCarton', array($consignmentCode, $cartonId, $parameters),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

}
/**
 * ConsignmentTrackingServiceService class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class ConsignmentTrackingServiceService extends SoapClient {

  private static $classmap = array(
                                    'ParcelTrackingItem' => 'ParcelTrackingItem',
                                    'ParcelTrackingInfo' => 'ParcelTrackingInfo',
                                    'ConsignmentTrackingInfo' => 'ConsignmentTrackingInfo',
                                    'ParcelStatusHistory' => 'ParcelStatusHistory',
                                   );

  public function ConsignmentTrackingServiceService($wsdl = "http://www.metapack.com/devcentre/sites/default/files/wsdl/5.x/ConsignmentTrackingService.wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param string $orderReference
   * @return ArrayOf_tns1_ConsignmentTrackingInfo
   */
  public function findParcelTrackingByOrderReference($orderReference) {
    return $this->__soapCall('findParcelTrackingByOrderReference', array($orderReference),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @return ArrayOf_tns1_ConsignmentTrackingInfo
   */
  public function findParcelTrackingByConsignmentCode($consignmentCode) {
    return $this->__soapCall('findParcelTrackingByConsignmentCode', array($consignmentCode),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param dateTime $fromDate
   * @param dateTime $toDate
   * @return ArrayOf_tns1_ParcelStatusHistory
   */
  public function findAllParcelStatusesBetweenDates($fromDate, $toDate) {
    return $this->__soapCall('findAllParcelStatusesBetweenDates', array($fromDate, $toDate),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

}

/**
 * DebugServiceService class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class DebugServiceService extends SoapClient {

  private static $classmap = array(
                                    'WorkingDays' => 'WorkingDays',
                                    'DateRange' => 'DateRange',
                                    'AllocationFilter' => 'AllocationFilter',
                                    'Product' => 'Product',
                                    'Parcel' => 'Parcel',
                                    'Property' => 'Property',
                                    'Address' => 'Address',
                                    'VerifiedAddress' => 'VerifiedAddress',
                                    'Consignment' => 'Consignment',
                                   );

  public function DebugServiceService($wsdl = "http://www.metapack.com/devcentre/sites/default/files/wsdl/5.x/DebugService.wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @param AllocationFilter $filter
   * @return ArrayOf_soapenc_string
   */
  public function debugConsignmentWhyNot($consignmentCode, AllocationFilter $filter) {
    return $this->__soapCall('debugConsignmentWhyNot', array($consignmentCode, $filter),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $consignmentCode
   * @param string $bookingCode
   * @return ArrayOf_soapenc_string
   */
  public function debugConsignmentWhyNotWithBookingCode($consignmentCode, $bookingCode) {
    return $this->__soapCall('debugConsignmentWhyNotWithBookingCode', array($consignmentCode, $bookingCode),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param Consignment $consignment
   * @param string $bookingCode
   * @return ArrayOf_soapenc_string
   */
  public function debugWhyNotWithBookingCode(Consignment $consignment, $bookingCode) {
    return $this->__soapCall('debugWhyNotWithBookingCode', array($consignment, $bookingCode),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param Consignment $consignment
   * @param AllocationFilter $filter
   * @return ArrayOf_soapenc_string
   */
  public function debugWhyNot(Consignment $consignment, AllocationFilter $filter) {
    return $this->__soapCall('debugWhyNot', array($consignment, $filter),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

}
/**
 * InformationServiceService class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class InformationServiceService extends SoapClient {

  private static $classmap = array(
                                    'CodeName' => 'CodeName',
                                    'CodeNameDescription' => 'CodeNameDescription',
                                    'CarrierService' => 'CarrierService',
                                    'Address' => 'Address',
                                    'VerifiedAddress' => 'VerifiedAddress',
                                   );

  public function InformationServiceService($wsdl = "http://www.metapack.com/devcentre/sites/default/files/wsdl/5.x/InformationService.wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param  
   * @return ArrayOf_tns1_CodeName
   */
  public function findWarehouses() {
    return $this->__soapCall('findWarehouses', array(),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param  
   * @return ArrayOf_soapenc_string
   */
  public function findTransactionTypes() {
    return $this->__soapCall('findTransactionTypes', array(),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param  
   * @return ArrayOf_soapenc_string
   */
  public function findConsignmentStatuses() {
    return $this->__soapCall('findConsignmentStatuses', array(),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param  
   * @return ArrayOf_soapenc_string
   */
  public function findManifestStatuses() {
    return $this->__soapCall('findManifestStatuses', array(),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param  
   * @return ArrayOf_tns1_CodeName
   */
  public function findCarriers() {
    return $this->__soapCall('findCarriers', array(),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param  
   * @return ArrayOf_tns1_CodeName
   */
  public function findCarrierServiceTypes() {
    return $this->__soapCall('findCarrierServiceTypes', array(),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param  
   * @return ArrayOf_tns1_CodeNameDescription
   */
  public function findGroups() {
    return $this->__soapCall('findGroups', array(),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $carrierCode
   * @return ArrayOf_tns1_CarrierService
   */
  public function findCarrierServices($carrierCode) {
    return $this->__soapCall('findCarrierServices', array($carrierCode),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param  
   * @return ArrayOf_soapenc_string
   */
  public function findPODTypes() {
    return $this->__soapCall('findPODTypes', array(),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_tns1_Address $addresses
   * @return ArrayOf_tns1_VerifiedAddress
   */
  public function verifyAddresses($addresses) {
    return $this->__soapCall('verifyAddresses', array($addresses),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param Address $address
   * @return ArrayOf_tns1_Address
   */
  public function findSimilarAddresses(Address $address) {
    return $this->__soapCall('findSimilarAddresses', array($address),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

}

/**
 * ManifestServiceService class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class ManifestServiceService extends SoapClient {

  private static $classmap = array(
                                    'DateRange' => 'DateRange',
                                    'Product' => 'Product',
                                    'Parcel' => 'Parcel',
                                    'Property' => 'Property',
                                    'Address' => 'Address',
                                    'VerifiedAddress' => 'VerifiedAddress',
                                    'Consignment' => 'Consignment',
                                    'Manifest' => 'Manifest',
                                    'ReadyToManifestInfo' => 'ReadyToManifestInfo',
                                   );

  public function ManifestServiceService($wsdl = "http://www.metapack.com/devcentre/sites/default/files/wsdl/5.x/ManifestService.wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param string $carrierCode
   * @param string $warehouseCode
   * @param string $transactionType
   * @param string $manifestGroupCode
   * @param dateTime $despatchDate
   * @param boolean $specificDateOnly
   * @return ArrayOf_soapenc_string
   */
  public function createManifestForFutureDespatch($carrierCode, $warehouseCode, $transactionType, $manifestGroupCode, $despatchDate, $specificDateOnly) {
    return $this->__soapCall('createManifestForFutureDespatch', array($carrierCode, $warehouseCode, $transactionType, $manifestGroupCode, $despatchDate, $specificDateOnly),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $carrierCode
   * @param string $warehouseCode
   * @param string $transactionType
   * @param string $manifestGroupCode
   * @return ArrayOf_soapenc_string
   */
  public function createManifest($carrierCode, $warehouseCode, $transactionType, $manifestGroupCode) {
    return $this->__soapCall('createManifest', array($carrierCode, $warehouseCode, $transactionType, $manifestGroupCode),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $manifestCode
   * @return ArrayOf_tns1_Consignment
   */
  public function findConsignmentsOnManifest($manifestCode) {
    return $this->__soapCall('findConsignmentsOnManifest', array($manifestCode),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $carrierCode
   * @param string $warehouseCode
   * @param string $transactionType
   * @param string $manifestGroupCode
   * @param dateTime $dateFrom
   * @param dateTime $dateTo
   * @return ArrayOf_tns1_Manifest
   */
  public function findManifests($carrierCode, $warehouseCode, $transactionType, $manifestGroupCode, $dateFrom, $dateTo) {
    return $this->__soapCall('findManifests', array($carrierCode, $warehouseCode, $transactionType, $manifestGroupCode, $dateFrom, $dateTo),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $warehouseCode
   * @param string $transactionType
   * @return ArrayOf_tns1_ReadyToManifestInfo
   */
  public function findReadyToManifestRecords($warehouseCode, $transactionType) {
    return $this->__soapCall('findReadyToManifestRecords', array($warehouseCode, $transactionType),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $manifestCode
   * @return boolean
   */
  public function sendManifest($manifestCode) {
    return $this->__soapCall('sendManifest', array($manifestCode),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $manifestCode
   * @return string
   */
  public function createManifestAsPdf($manifestCode) {
    return $this->__soapCall('createManifestAsPdf', array($manifestCode),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $manifestGroupCode
   * @return boolean
   */
  public function markManifestGroupReadyToManifest($manifestGroupCode) {
    return $this->__soapCall('markManifestGroupReadyToManifest', array($manifestGroupCode),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $manifestGroupCode
   * @return boolean
   */
  public function markManifestGroupPrinted($manifestGroupCode) {
    return $this->__soapCall('markManifestGroupPrinted', array($manifestGroupCode),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param string $oldManifestGroupCode
   * @param string $newManifestGroupCode
   * @return boolean
   */
  public function moveManifestGroup($oldManifestGroupCode, $newManifestGroupCode) {
    return $this->__soapCall('moveManifestGroup', array($oldManifestGroupCode, $newManifestGroupCode),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

}


/**
 * SetupServiceService class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class SetupServiceService extends SoapClient {

  private static $classmap = array(
                                   );

  public function SetupServiceService($wsdl = "http://www.metapack.com/devcentre/sites/default/files/wsdl/5.x/SetupService.wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param ArrayOf_soapenc_string $carrierCodes
   * @return boolean
   */
  public function enableCarriers($carrierCodes) {
    return $this->__soapCall('enableCarriers', array($carrierCodes),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_soapenc_string $carrierCodes
   * @return boolean
   */
  public function disableCarriers($carrierCodes) {
    return $this->__soapCall('disableCarriers', array($carrierCodes),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_soapenc_string $carrierServiceCodes
   * @return boolean
   */
  public function enableCarrierServices($carrierServiceCodes) {
    return $this->__soapCall('enableCarrierServices', array($carrierServiceCodes),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param ArrayOf_soapenc_string $carrierServiceCodes
   * @return boolean
   */
  public function disableCarrierServices($carrierServiceCodes) {
    return $this->__soapCall('disableCarrierServices', array($carrierServiceCodes),       array(
            'uri' => 'urn:DeliveryManager/services',
            'soapaction' => ''
           )
      );
  }

}

?>
