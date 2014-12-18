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
 * @package  Marketplace Web Service Orders
 * @version  2013-09-01
 * Library Version: 2014-10-20
 * Generated: Fri Oct 17 15:31:59 GMT 2014
 */

/**
 * MarketplaceWebServiceOrders_Model_ListOrdersResult
 *
 * Properties:
 * <ul>
 *
 * <li>NextToken: string</li>
 * <li>CreatedBefore: string</li>
 * <li>LastUpdatedBefore: string</li>
 * <li>Orders: array</li>
 *
 * </ul>
 */
class MarketplaceWebServiceOrders_Model_ListOrdersResult extends MarketplaceWebServiceOrders_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
            'CreatedBefore' => array('FieldValue' => null, 'FieldType' => 'string'),
            'LastUpdatedBefore' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Orders' => array(
                'FieldValue' => array(),
                'FieldType' => array('MarketplaceWebServiceOrders_Model_Order'),
                'ListMemberName' => 'Order'
            ),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the NextToken property.
     *
     * @return String NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of the NextToken property.
     *
     * @param string $value nextToken
     * @return $this This instance
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set.
     */
    public function isSetNextToken()
    {
        return !is_null($this->_fields['NextToken']['FieldValue']);
    }

    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }

    /**
     * Get the value of the CreatedBefore property.
     *
     * @return XMLGregorianCalendar CreatedBefore.
     */
    public function getCreatedBefore()
    {
        return $this->_fields['CreatedBefore']['FieldValue'];
    }

    /**
     * Set the value of the CreatedBefore property.
     *
     * @param string $value createdBefore
     * @return $this This instance
     */
    public function setCreatedBefore($value)
    {
        $this->_fields['CreatedBefore']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CreatedBefore is set.
     *
     * @return true if CreatedBefore is set.
     */
    public function isSetCreatedBefore()
    {
        return !is_null($this->_fields['CreatedBefore']['FieldValue']);
    }

    /**
     * Set the value of CreatedBefore, return this.
     *
     * @param createdBefore
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withCreatedBefore($value)
    {
        $this->setCreatedBefore($value);
        return $this;
    }

    /**
     * Get the value of the LastUpdatedBefore property.
     *
     * @return XMLGregorianCalendar LastUpdatedBefore.
     */
    public function getLastUpdatedBefore()
    {
        return $this->_fields['LastUpdatedBefore']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdatedBefore property.
     *
     * @param string $value lastUpdatedBefore
     * @return $this This instance
     */
    public function setLastUpdatedBefore($value)
    {
        $this->_fields['LastUpdatedBefore']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LastUpdatedBefore is set.
     *
     * @return true if LastUpdatedBefore is set.
     */
    public function isSetLastUpdatedBefore()
    {
        return !is_null($this->_fields['LastUpdatedBefore']['FieldValue']);
    }

    /**
     * Set the value of LastUpdatedBefore, return this.
     *
     * @param lastUpdatedBefore
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withLastUpdatedBefore($value)
    {
        $this->setLastUpdatedBefore($value);
        return $this;
    }

    /**
     * Get the value of the Orders property.
     *
     * @return Order[] Orders.
     */
    public function getOrders()
    {
        if ($this->_fields['Orders']['FieldValue'] == null) {
            $this->_fields['Orders']['FieldValue'] = array();
        }
        return $this->_fields['Orders']['FieldValue'];
    }

    /**
     * Set the value of the Orders property.
     *
     * @param array $value orders
     * @return $this This instance
     */
    public function setOrders($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['Orders']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Orders.
     */
    public function unsetOrders()
    {
        $this->_fields['Orders']['FieldValue'] = array();
    }

    /**
     * Check to see if Orders is set.
     *
     * @return true if Orders is set.
     */
    public function isSetOrders()
    {
        return !empty($this->_fields['Orders']['FieldValue']);
    }

    /**
     * Add values for Orders, return this.
     *
     * @param orders
     *             New values to add.
     *
     * @return $this This instance.
     */
    public function withOrders()
    {
        foreach (func_get_args() as $Orders) {
            $this->_fields['Orders']['FieldValue'][] = $Orders;
        }
        return $this;
    }

}
