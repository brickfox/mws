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
 * FBAOutboundServiceMWS_Model_GetServiceStatusResult
 *
 * Properties:
 * <ul>
 *
 * <li>Status: string</li>
 * <li>Timestamp: string</li>
 *
 * </ul>
 */
class FBAOutboundServiceMWS_Model_GetServiceStatusResult extends FBAOutboundServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'Status' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Timestamp' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Status property.
     *
     * @return String Status.
     */
    public function getStatus()
    {
        return $this->_fields['Status']['FieldValue'];
    }

    /**
     * Set the value of the Status property.
     *
     * @param string $value status
     * @return $this This instance
     */
    public function setStatus($value)
    {
        $this->_fields['Status']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Status is set.
     *
     * @return bool True if Status is set.
     */
    public function isSetStatus()
    {
        return !is_null($this->_fields['Status']['FieldValue']);
    }

    /**
     * Set the value of Status, return this.
     *
     * @param status
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withStatus($value)
    {
        $this->setStatus($value);
        return $this;
    }

    /**
     * Get the value of the Timestamp property.
     *
     * @return string Timestamp.
     */
    public function getTimestamp()
    {
        return $this->_fields['Timestamp']['FieldValue'];
    }

    /**
     * Set the value of the Timestamp property.
     *
     * @param string $value timestamp
     * @return $this This instance
     */
    public function setTimestamp($value)
    {
        $this->_fields['Timestamp']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Timestamp is set.
     *
     * @return bool True if Timestamp is set.
     */
    public function isSetTimestamp()
    {
        return !is_null($this->_fields['Timestamp']['FieldValue']);
    }

    /**
     * Set the value of Timestamp, return this.
     *
     * @param timestamp
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withTimestamp($value)
    {
        $this->setTimestamp($value);
        return $this;
    }

}
