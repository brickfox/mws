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
 * @package  Marketplace Web Service Sellers
 * @version  2011-07-01
 * Library Version: 2014-10-20
 * Generated: Fri Oct 17 18:34:06 GMT 2014
 */

/**
 * MarketplaceWebServiceSellers_Model_Participation
 *
 * Properties:
 * <ul>
 *
 * <li>MarketplaceId: string</li>
 * <li>SellerId: string</li>
 * <li>HasSellerSuspendedListings: string</li>
 *
 * </ul>
 */
class MarketplaceWebServiceSellers_Model_Participation extends MarketplaceWebServiceSellers_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'HasSellerSuspendedListings' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string $value marketplaceId
     * @return $this This instance
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return bool True if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return !is_null($this->_fields['MarketplaceId']['FieldValue']);
    }

    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param marketplaceId
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);
        return $this;
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
     * Get the value of the HasSellerSuspendedListings property.
     *
     * @return String HasSellerSuspendedListings.
     */
    public function getHasSellerSuspendedListings()
    {
        return $this->_fields['HasSellerSuspendedListings']['FieldValue'];
    }

    /**
     * Set the value of the HasSellerSuspendedListings property.
     *
     * @param string $value hasSellerSuspendedListings
     * @return $this This instance
     */
    public function setHasSellerSuspendedListings($value)
    {
        $this->_fields['HasSellerSuspendedListings']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if HasSellerSuspendedListings is set.
     *
     * @return bool True if HasSellerSuspendedListings is set.
     */
    public function isSetHasSellerSuspendedListings()
    {
        return !is_null($this->_fields['HasSellerSuspendedListings']['FieldValue']);
    }

    /**
     * Set the value of HasSellerSuspendedListings, return this.
     *
     * @param hasSellerSuspendedListings
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withHasSellerSuspendedListings($value)
    {
        $this->setHasSellerSuspendedListings($value);
        return $this;
    }

}
