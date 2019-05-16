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
 * FBAInventoryServiceMWS_Model_InventorySupplyDetail
 *
 * Properties:
 * <ul>
 *
 * <li>Quantity: int</li>
 * <li>SupplyType: string</li>
 * <li>EarliestAvailableToPick: FBAInventoryServiceMWS_Model_Timepoint</li>
 * <li>LatestAvailableToPick: FBAInventoryServiceMWS_Model_Timepoint</li>
 *
 * </ul>
 */
class FBAInventoryServiceMWS_Model_InventorySupplyDetail extends FBAInventoryServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'Quantity' => array('FieldValue' => null, 'FieldType' => 'int'),
            'SupplyType' => array('FieldValue' => null, 'FieldType' => 'string'),
            'EarliestAvailableToPick' => array(
                'FieldValue' => null,
                'FieldType' => 'FBAInventoryServiceMWS_Model_Timepoint'
            ),
            'LatestAvailableToPick' => array(
                'FieldValue' => null,
                'FieldType' => 'FBAInventoryServiceMWS_Model_Timepoint'
            ),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Quantity property.
     *
     * @return Integer Quantity.
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }

    /**
     * Set the value of the Quantity property.
     *
     * @param int $value quantity
     * @return $this This instance
     */
    public function setQuantity($value)
    {
        $this->_fields['Quantity']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Quantity is set.
     *
     * @return bool True if Quantity is set.
     */
    public function isSetQuantity()
    {
        return !is_null($this->_fields['Quantity']['FieldValue']);
    }

    /**
     * Set the value of Quantity, return this.
     *
     * @param quantity
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withQuantity($value)
    {
        $this->setQuantity($value);
        return $this;
    }

    /**
     * Get the value of the SupplyType property.
     *
     * @return String SupplyType.
     */
    public function getSupplyType()
    {
        return $this->_fields['SupplyType']['FieldValue'];
    }

    /**
     * Set the value of the SupplyType property.
     *
     * @param string $value supplyType
     * @return $this This instance
     */
    public function setSupplyType($value)
    {
        $this->_fields['SupplyType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SupplyType is set.
     *
     * @return bool True if SupplyType is set.
     */
    public function isSetSupplyType()
    {
        return !is_null($this->_fields['SupplyType']['FieldValue']);
    }

    /**
     * Set the value of SupplyType, return this.
     *
     * @param supplyType
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withSupplyType($value)
    {
        $this->setSupplyType($value);
        return $this;
    }

    /**
     * Get the value of the EarliestAvailableToPick property.
     *
     * @return FBAInventoryServiceMWS_Model_Timepoint EarliestAvailableToPick.
     */
    public function getEarliestAvailableToPick()
    {
        return $this->_fields['EarliestAvailableToPick']['FieldValue'];
    }

    /**
     * Set the value of the EarliestAvailableToPick property.
     *
     * @param FBAInventoryServiceMWS_Model_Timepoint $value earliestAvailableToPick
     * @return $this This instance
     */
    public function setEarliestAvailableToPick($value)
    {
        $this->_fields['EarliestAvailableToPick']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EarliestAvailableToPick is set.
     *
     * @return bool True if EarliestAvailableToPick is set.
     */
    public function isSetEarliestAvailableToPick()
    {
        return !is_null($this->_fields['EarliestAvailableToPick']['FieldValue']);
    }

    /**
     * Set the value of EarliestAvailableToPick, return this.
     *
     * @param earliestAvailableToPick
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withEarliestAvailableToPick($value)
    {
        $this->setEarliestAvailableToPick($value);
        return $this;
    }

    /**
     * Get the value of the LatestAvailableToPick property.
     *
     * @return FBAInventoryServiceMWS_Model_Timepoint LatestAvailableToPick.
     */
    public function getLatestAvailableToPick()
    {
        return $this->_fields['LatestAvailableToPick']['FieldValue'];
    }

    /**
     * Set the value of the LatestAvailableToPick property.
     *
     * @param FBAInventoryServiceMWS_Model_Timepoint $value latestAvailableToPick
     * @return $this This instance
     */
    public function setLatestAvailableToPick($value)
    {
        $this->_fields['LatestAvailableToPick']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LatestAvailableToPick is set.
     *
     * @return bool True if LatestAvailableToPick is set.
     */
    public function isSetLatestAvailableToPick()
    {
        return !is_null($this->_fields['LatestAvailableToPick']['FieldValue']);
    }

    /**
     * Set the value of LatestAvailableToPick, return this.
     *
     * @param latestAvailableToPick
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withLatestAvailableToPick($value)
    {
        $this->setLatestAvailableToPick($value);
        return $this;
    }

}
