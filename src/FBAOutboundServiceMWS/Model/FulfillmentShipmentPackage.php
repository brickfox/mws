<?php
/*******************************************************************************
 * Copyright 2009-2014 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2014-10-20
 * Generated: Thu Oct 30 16:36:58 GMT 2014
 */

/**
 * FBAOutboundServiceMWS_Model_FulfillmentShipmentPackage
 *
 * Properties:
 * <ul>
 *
 * <li>PackageNumber: int</li>
 * <li>CarrierCode: string</li>
 * <li>TrackingNumber: string</li>
 * <li>EstimatedArrivalDateTime: string</li>
 *
 * </ul>
 */
class FBAOutboundServiceMWS_Model_FulfillmentShipmentPackage extends FBAOutboundServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'PackageNumber' => array('FieldValue' => null, 'FieldType' => 'int'),
            'CarrierCode' => array('FieldValue' => null, 'FieldType' => 'string'),
            'TrackingNumber' => array('FieldValue' => null, 'FieldType' => 'string'),
            'EstimatedArrivalDateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the PackageNumber property.
     *
     * @return int PackageNumber.
     */
    public function getPackageNumber()
    {
        return $this->_fields['PackageNumber']['FieldValue'];
    }

    /**
     * Set the value of the PackageNumber property.
     *
     * @param int $value packageNumber
     * @return $this This instance
     */
    public function setPackageNumber($value)
    {
        $this->_fields['PackageNumber']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PackageNumber is set.
     *
     * @return bool True if PackageNumber is set.
     */
    public function isSetPackageNumber()
    {
        return !is_null($this->_fields['PackageNumber']['FieldValue']);
    }

    /**
     * Set the value of PackageNumber, return this.
     *
     * @param packageNumber
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withPackageNumber($value)
    {
        $this->setPackageNumber($value);
        return $this;
    }

    /**
     * Get the value of the CarrierCode property.
     *
     * @return String CarrierCode.
     */
    public function getCarrierCode()
    {
        return $this->_fields['CarrierCode']['FieldValue'];
    }

    /**
     * Set the value of the CarrierCode property.
     *
     * @param string $value carrierCode
     * @return $this This instance
     */
    public function setCarrierCode($value)
    {
        $this->_fields['CarrierCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CarrierCode is set.
     *
     * @return bool True if CarrierCode is set.
     */
    public function isSetCarrierCode()
    {
        return !is_null($this->_fields['CarrierCode']['FieldValue']);
    }

    /**
     * Set the value of CarrierCode, return this.
     *
     * @param carrierCode
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withCarrierCode($value)
    {
        $this->setCarrierCode($value);
        return $this;
    }

    /**
     * Get the value of the TrackingNumber property.
     *
     * @return String TrackingNumber.
     */
    public function getTrackingNumber()
    {
        return $this->_fields['TrackingNumber']['FieldValue'];
    }

    /**
     * Set the value of the TrackingNumber property.
     *
     * @param string $value trackingNumber
     * @return $this This instance
     */
    public function setTrackingNumber($value)
    {
        $this->_fields['TrackingNumber']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TrackingNumber is set.
     *
     * @return bool True if TrackingNumber is set.
     */
    public function isSetTrackingNumber()
    {
        return !is_null($this->_fields['TrackingNumber']['FieldValue']);
    }

    /**
     * Set the value of TrackingNumber, return this.
     *
     * @param trackingNumber
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withTrackingNumber($value)
    {
        $this->setTrackingNumber($value);
        return $this;
    }

    /**
     * Get the value of the EstimatedArrivalDateTime property.
     *
     * @return string EstimatedArrivalDateTime.
     */
    public function getEstimatedArrivalDateTime()
    {
        return $this->_fields['EstimatedArrivalDateTime']['FieldValue'];
    }

    /**
     * Set the value of the EstimatedArrivalDateTime property.
     *
     * @param string $value estimatedArrivalDateTime
     * @return $this This instance
     */
    public function setEstimatedArrivalDateTime($value)
    {
        $this->_fields['EstimatedArrivalDateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EstimatedArrivalDateTime is set.
     *
     * @return bool True if EstimatedArrivalDateTime is set.
     */
    public function isSetEstimatedArrivalDateTime()
    {
        return !is_null($this->_fields['EstimatedArrivalDateTime']['FieldValue']);
    }

    /**
     * Set the value of EstimatedArrivalDateTime, return this.
     *
     * @param estimatedArrivalDateTime
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withEstimatedArrivalDateTime($value)
    {
        $this->setEstimatedArrivalDateTime($value);
        return $this;
    }

}
