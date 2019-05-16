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
 * FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersRequest
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>Marketplace: string</li>
 * <li>QueryStartDateTime: string</li>
 * <li>FulfillmentMethod: FBAOutboundServiceMWS_Model_FulfillmentMethodList</li>
 *
 * </ul>
 */
class FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersRequest extends FBAOutboundServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'),
            'QueryStartDateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
            'FulfillmentMethod' => array(
                'FieldValue' => null,
                'FieldType' => 'FBAOutboundServiceMWS_Model_FulfillmentMethodList'
            ),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string $value sellerId
     * @return $this This instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return bool True if SellerId is set.
     */
    public function isSetSellerId()
    {
        return !is_null($this->_fields['SellerId']['FieldValue']);
    }

    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }

    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return String MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string $value mwsAuthToken
     * @return $this This instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return bool True if MWSAuthToken is set.
     */
    public function isSetMWSAuthToken()
    {
        return !is_null($this->_fields['MWSAuthToken']['FieldValue']);
    }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param mwsAuthToken
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
        return $this;
    }

    /**
     * Get the value of the Marketplace property.
     *
     * @return String Marketplace.
     */
    public function getMarketplace()
    {
        return $this->_fields['Marketplace']['FieldValue'];
    }

    /**
     * Set the value of the Marketplace property.
     *
     * @param string $value marketplace
     * @return $this This instance
     */
    public function setMarketplace($value)
    {
        $this->_fields['Marketplace']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Marketplace is set.
     *
     * @return bool True if Marketplace is set.
     */
    public function isSetMarketplace()
    {
        return !is_null($this->_fields['Marketplace']['FieldValue']);
    }

    /**
     * Set the value of Marketplace, return this.
     *
     * @param marketplace
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withMarketplace($value)
    {
        $this->setMarketplace($value);
        return $this;
    }

    /**
     * Get the value of the QueryStartDateTime property.
     *
     * @return string QueryStartDateTime.
     */
    public function getQueryStartDateTime()
    {
        return $this->_fields['QueryStartDateTime']['FieldValue'];
    }

    /**
     * Set the value of the QueryStartDateTime property.
     *
     * @param string $value queryStartDateTime
     * @return $this This instance
     */
    public function setQueryStartDateTime($value)
    {
        $this->_fields['QueryStartDateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if QueryStartDateTime is set.
     *
     * @return bool True if QueryStartDateTime is set.
     */
    public function isSetQueryStartDateTime()
    {
        return !is_null($this->_fields['QueryStartDateTime']['FieldValue']);
    }

    /**
     * Set the value of QueryStartDateTime, return this.
     *
     * @param queryStartDateTime
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withQueryStartDateTime($value)
    {
        $this->setQueryStartDateTime($value);
        return $this;
    }

    /**
     * Get the value of the FulfillmentMethod property.
     *
     * @return FBAOutboundServiceMWS_Model_FulfillmentMethodList FulfillmentMethod.
     */
    public function getFulfillmentMethod()
    {
        return $this->_fields['FulfillmentMethod']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentMethod property.
     *
     * @param FBAOutboundServiceMWS_Model_FulfillmentMethodList $value fulfillmentMethod
     * @return $this This instance
     */
    public function setFulfillmentMethod($value)
    {
        $this->_fields['FulfillmentMethod']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentMethod is set.
     *
     * @return bool True if FulfillmentMethod is set.
     */
    public function isSetFulfillmentMethod()
    {
        return !is_null($this->_fields['FulfillmentMethod']['FieldValue']);
    }

    /**
     * Set the value of FulfillmentMethod, return this.
     *
     * @param fulfillmentMethod
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withFulfillmentMethod($value)
    {
        $this->setFulfillmentMethod($value);
        return $this;
    }

}
