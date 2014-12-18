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
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2014-10-20
 * Generated: Fri Oct 17 17:59:56 GMT 2014
 */

/**
 * MarketplaceWebServiceProducts_Model_PriceType
 *
 * Properties:
 * <ul>
 *
 * <li>LandedPrice: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>ListingPrice: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>Shipping: MarketplaceWebServiceProducts_Model_MoneyType</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_PriceType extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'LandedPrice' => array(
                'FieldValue' => null,
                'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'
            ),
            'ListingPrice' => array(
                'FieldValue' => null,
                'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'
            ),
            'Shipping' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the LandedPrice property.
     *
     * @return MarketplaceWebServiceProducts_Model_MoneyType LandedPrice.
     */
    public function getLandedPrice()
    {
        return $this->_fields['LandedPrice']['FieldValue'];
    }

    /**
     * Set the value of the LandedPrice property.
     *
     * @param MarketplaceWebServiceProducts_Model_MoneyType $value landedPrice
     * @return $this This instance
     */
    public function setLandedPrice($value)
    {
        $this->_fields['LandedPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LandedPrice is set.
     *
     * @return true if LandedPrice is set.
     */
    public function isSetLandedPrice()
    {
        return !is_null($this->_fields['LandedPrice']['FieldValue']);
    }

    /**
     * Set the value of LandedPrice, return this.
     *
     * @param landedPrice
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withLandedPrice($value)
    {
        $this->setLandedPrice($value);
        return $this;
    }

    /**
     * Get the value of the ListingPrice property.
     *
     * @return MoneyType ListingPrice.
     */
    public function getListingPrice()
    {
        return $this->_fields['ListingPrice']['FieldValue'];
    }

    /**
     * Set the value of the ListingPrice property.
     *
     * @param MarketplaceWebServiceProducts_Model_MoneyType $value listingPrice
     * @return $this This instance
     */
    public function setListingPrice($value)
    {
        $this->_fields['ListingPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListingPrice is set.
     *
     * @return true if ListingPrice is set.
     */
    public function isSetListingPrice()
    {
        return !is_null($this->_fields['ListingPrice']['FieldValue']);
    }

    /**
     * Set the value of ListingPrice, return this.
     *
     * @param listingPrice
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withListingPrice($value)
    {
        $this->setListingPrice($value);
        return $this;
    }

    /**
     * Get the value of the Shipping property.
     *
     * @return MoneyType Shipping.
     */
    public function getShipping()
    {
        return $this->_fields['Shipping']['FieldValue'];
    }

    /**
     * Set the value of the Shipping property.
     *
     * @param MarketplaceWebServiceProducts_Model_MoneyType $value shipping
     * @return $this This instance
     */
    public function setShipping($value)
    {
        $this->_fields['Shipping']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Shipping is set.
     *
     * @return true if Shipping is set.
     */
    public function isSetShipping()
    {
        return !is_null($this->_fields['Shipping']['FieldValue']);
    }

    /**
     * Set the value of Shipping, return this.
     *
     * @param shipping
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withShipping($value)
    {
        $this->setShipping($value);
        return $this;
    }

}
