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
 * @package  FBA Inventory Service MWS
 * @version  2010-10-01
 * Library Version: 2014-10-20
 * Generated: Fri Oct 17 17:54:00 GMT 2014
 */

/**
 * FBAInventoryServiceMWS_Model_ListInventorySupplyResult
 *
 * Properties:
 * <ul>
 *
 * <li>InventorySupplyList: FBAInventoryServiceMWS_Model_InventorySupplyList</li>
 * <li>NextToken: string</li>
 *
 * </ul>
 */
class FBAInventoryServiceMWS_Model_ListInventorySupplyResult extends FBAInventoryServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'InventorySupplyList' => array(
                'FieldValue' => null,
                'FieldType' => 'FBAInventoryServiceMWS_Model_InventorySupplyList'
            ),
            'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the InventorySupplyList property.
     *
     * @return InventorySupplyList InventorySupplyList.
     */
    public function getInventorySupplyList()
    {
        return $this->_fields['InventorySupplyList']['FieldValue'];
    }

    /**
     * Set the value of the InventorySupplyList property.
     *
     * @param FBAInventoryServiceMWS_Model_InventorySupplyList inventorySupplyList
     * @return $this This instance
     */
    public function setInventorySupplyList($value)
    {
        $this->_fields['InventorySupplyList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InventorySupplyList is set.
     *
     * @return true if InventorySupplyList is set.
     */
    public function isSetInventorySupplyList()
    {
        return !is_null($this->_fields['InventorySupplyList']['FieldValue']);
    }

    /**
     * Set the value of InventorySupplyList, return this.
     *
     * @param inventorySupplyList
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withInventorySupplyList($value)
    {
        $this->setInventorySupplyList($value);
        return $this;
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
     * @param string nextToken
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

}
