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
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2014-09-30
 * Generated: Fri Nov 21 18:21:09 GMT 2014
 */

/**
 * FBAInboundServiceMWS_Model_Dimensions
 *
 * Properties:
 * <ul>
 *
 * <li>Length: float</li>
 * <li>Width: float</li>
 * <li>Height: float</li>
 * <li>Unit: string</li>
 *
 * </ul>
 */
class FBAInboundServiceMWS_Model_Dimensions extends FBAInboundServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'Length' => array('FieldValue' => null, 'FieldType' => 'float'),
            'Width' => array('FieldValue' => null, 'FieldType' => 'float'),
            'Height' => array('FieldValue' => null, 'FieldType' => 'float'),
            'Unit' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Length property.
     *
     * @return string Length.
     */
    public function getLength()
    {
        return $this->_fields['Length']['FieldValue'];
    }

    /**
     * Set the value of the Length property.
     *
     * @param float $value length
     * @return $this This instance
     */
    public function setLength($value)
    {
        $this->_fields['Length']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Length is set.
     *
     * @return bool True if Length is set.
     */
    public function isSetLength()
    {
        return !is_null($this->_fields['Length']['FieldValue']);
    }

    /**
     * Set the value of Length, return this.
     *
     * @param length
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withLength($value)
    {
        $this->setLength($value);
        return $this;
    }

    /**
     * Get the value of the Width property.
     *
     * @return float Width.
     */
    public function getWidth()
    {
        return $this->_fields['Width']['FieldValue'];
    }

    /**
     * Set the value of the Width property.
     *
     * @param float $value width
     * @return $this This instance
     */
    public function setWidth($value)
    {
        $this->_fields['Width']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Width is set.
     *
     * @return bool True if Width is set.
     */
    public function isSetWidth()
    {
        return !is_null($this->_fields['Width']['FieldValue']);
    }

    /**
     * Set the value of Width, return this.
     *
     * @param width
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withWidth($value)
    {
        $this->setWidth($value);
        return $this;
    }

    /**
     * Get the value of the Height property.
     *
     * @return float Height.
     */
    public function getHeight()
    {
        return $this->_fields['Height']['FieldValue'];
    }

    /**
     * Set the value of the Height property.
     *
     * @param float $value height
     * @return $this This instance
     */
    public function setHeight($value)
    {
        $this->_fields['Height']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Height is set.
     *
     * @return bool True if Height is set.
     */
    public function isSetHeight()
    {
        return !is_null($this->_fields['Height']['FieldValue']);
    }

    /**
     * Set the value of Height, return this.
     *
     * @param height
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withHeight($value)
    {
        $this->setHeight($value);
        return $this;
    }

    /**
     * Get the value of the Unit property.
     *
     * @return String Unit.
     */
    public function getUnit()
    {
        return $this->_fields['Unit']['FieldValue'];
    }

    /**
     * Set the value of the Unit property.
     *
     * @param string $value unit
     * @return $this This instance
     */
    public function setUnit($value)
    {
        $this->_fields['Unit']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Unit is set.
     *
     * @return bool True if Unit is set.
     */
    public function isSetUnit()
    {
        return !is_null($this->_fields['Unit']['FieldValue']);
    }

    /**
     * Set the value of Unit, return this.
     *
     * @param unit
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withUnit($value)
    {
        $this->setUnit($value);
        return $this;
    }

}
