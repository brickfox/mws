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
 * MarketplaceWebServiceProducts_Model_OfferListingCountType
 *
 * Properties:
 * <ul>
 *
 * <li>Value: int</li>
 * <li>condition: string</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_OfferListingCountType extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'Value' => array('FieldValue' => null, 'FieldType' => 'int'),
            'condition' => array('FieldValue' => null, 'FieldType' => '@string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Value property.
     *
     * @return int Value.
     */
    public function getValue()
    {
        return $this->_fields['Value']['FieldValue'];
    }

    /**
     * Set the value of the Value property.
     *
     * @param int $value value
     * @return $this This instance
     */
    public function setValue($value)
    {
        $this->_fields['Value']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Value is set.
     *
     * @return bool True if Value is set.
     */
    public function isSetValue()
    {
        return !is_null($this->_fields['Value']['FieldValue']);
    }

    /**
     * Set the value of Value, return this.
     *
     * @param value
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withValue($value)
    {
        $this->setValue($value);
        return $this;
    }

    /**
     * Get the value of the condition property.
     *
     * @return String condition.
     */
    public function getcondition()
    {
        return $this->_fields['condition']['FieldValue'];
    }

    /**
     * Set the value of the condition property.
     *
     * @param string $value condition
     * @return $this This instance
     */
    public function setcondition($value)
    {
        $this->_fields['condition']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if condition is set.
     *
     * @return bool True if condition is set.
     */
    public function isSetcondition()
    {
        return !is_null($this->_fields['condition']['FieldValue']);
    }

    /**
     * Set the value of condition, return this.
     *
     * @param condition
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withcondition($value)
    {
        $this->setcondition($value);
        return $this;
    }

}
