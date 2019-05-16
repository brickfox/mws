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
 * MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResult
 *
 * Properties:
 * <ul>
 *
 * <li>AllOfferListingsConsidered: bool</li>
 * <li>Product: MarketplaceWebServiceProducts_Model_Product</li>
 * <li>Error: MarketplaceWebServiceProducts_Model_Error</li>
 * <li>SellerSKU: string</li>
 * <li>status: string</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResult extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'AllOfferListingsConsidered' => array('FieldValue' => null, 'FieldType' => 'bool'),
            'Product' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_Product'),
            'Error' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_Error'),
            'SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'),
            'status' => array('FieldValue' => null, 'FieldType' => '@string'),
        );
        parent::__construct($data);
    }

    /**
     * Check the value of AllOfferListingsConsidered.
     *
     * @return bool True if AllOfferListingsConsidered is set to true.
     */
    public function isAllOfferListingsConsidered()
    {
        return !is_null($this->_fields['AllOfferListingsConsidered']['FieldValue']) && $this->_fields['AllOfferListingsConsidered']['FieldValue'];
    }

    /**
     * Get the value of the AllOfferListingsConsidered property.
     *
     * @return Boolean AllOfferListingsConsidered.
     */
    public function getAllOfferListingsConsidered()
    {
        return $this->_fields['AllOfferListingsConsidered']['FieldValue'];
    }

    /**
     * Set the value of the AllOfferListingsConsidered property.
     *
     * @param bool $value allOfferListingsConsidered
     * @return $this This instance
     */
    public function setAllOfferListingsConsidered($value)
    {
        $this->_fields['AllOfferListingsConsidered']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AllOfferListingsConsidered is set.
     *
     * @return bool True if AllOfferListingsConsidered is set.
     */
    public function isSetAllOfferListingsConsidered()
    {
        return !is_null($this->_fields['AllOfferListingsConsidered']['FieldValue']);
    }

    /**
     * Set the value of AllOfferListingsConsidered, return this.
     *
     * @param allOfferListingsConsidered
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withAllOfferListingsConsidered($value)
    {
        $this->setAllOfferListingsConsidered($value);
        return $this;
    }

    /**
     * Get the value of the Product property.
     *
     * @return MarketplaceWebServiceProducts_Model_Product Product.
     */
    public function getProduct()
    {
        return $this->_fields['Product']['FieldValue'];
    }

    /**
     * Set the value of the Product property.
     *
     * @param MarketplaceWebServiceProducts_Model_Product $value product
     * @return $this This instance
     */
    public function setProduct($value)
    {
        $this->_fields['Product']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Product is set.
     *
     * @return bool True if Product is set.
     */
    public function isSetProduct()
    {
        return !is_null($this->_fields['Product']['FieldValue']);
    }

    /**
     * Set the value of Product, return this.
     *
     * @param product
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withProduct($value)
    {
        $this->setProduct($value);
        return $this;
    }

    /**
     * Get the value of the Error property.
     *
     * @return MarketplaceWebServiceProducts_Model_Error Error.
     */
    public function getError()
    {
        return $this->_fields['Error']['FieldValue'];
    }

    /**
     * Set the value of the Error property.
     *
     * @param MarketplaceWebServiceProducts_Model_Error $value error
     * @return $this This instance
     */
    public function setError($value)
    {
        $this->_fields['Error']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Error is set.
     *
     * @return bool True if Error is set.
     */
    public function isSetError()
    {
        return !is_null($this->_fields['Error']['FieldValue']);
    }

    /**
     * Set the value of Error, return this.
     *
     * @param error
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withError($value)
    {
        $this->setError($value);
        return $this;
    }

    /**
     * Get the value of the SellerSKU property.
     *
     * @return String SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of the SellerSKU property.
     *
     * @param string $value sellerSKU
     * @return $this This instance
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerSKU is set.
     *
     * @return bool True if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
        return !is_null($this->_fields['SellerSKU']['FieldValue']);
    }

    /**
     * Set the value of SellerSKU, return this.
     *
     * @param sellerSKU
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);
        return $this;
    }

    /**
     * Get the value of the status property.
     *
     * @return String status.
     */
    public function getstatus()
    {
        return $this->_fields['status']['FieldValue'];
    }

    /**
     * Set the value of the status property.
     *
     * @param string $value status
     * @return $this This instance
     */
    public function setstatus($value)
    {
        $this->_fields['status']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if status is set.
     *
     * @return bool True if status is set.
     */
    public function isSetstatus()
    {
        return !is_null($this->_fields['status']['FieldValue']);
    }

    /**
     * Set the value of status, return this.
     *
     * @param status
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withstatus($value)
    {
        $this->setstatus($value);
        return $this;
    }

}
