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
 * FBAOutboundServiceMWS_Model_GetFulfillmentOrderResult
 *
 * Properties:
 * <ul>
 *
 * <li>FulfillmentOrder: FBAOutboundServiceMWS_Model_FulfillmentOrder</li>
 * <li>FulfillmentOrderItem: FBAOutboundServiceMWS_Model_FulfillmentOrderItemList</li>
 * <li>FulfillmentShipment: FBAOutboundServiceMWS_Model_FulfillmentShipmentList</li>
 *
 * </ul>
 */
class FBAOutboundServiceMWS_Model_GetFulfillmentOrderResult extends FBAOutboundServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'FulfillmentOrder' => array(
                'FieldValue' => null,
                'FieldType' => 'FBAOutboundServiceMWS_Model_FulfillmentOrder'
            ),
            'FulfillmentOrderItem' => array(
                'FieldValue' => null,
                'FieldType' => 'FBAOutboundServiceMWS_Model_FulfillmentOrderItemList'
            ),
            'FulfillmentShipment' => array(
                'FieldValue' => null,
                'FieldType' => 'FBAOutboundServiceMWS_Model_FulfillmentShipmentList'
            ),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the FulfillmentOrder property.
     *
     * @return FBAOutboundServiceMWS_Model_FulfillmentOrder FulfillmentOrder.
     */
    public function getFulfillmentOrder()
    {
        return $this->_fields['FulfillmentOrder']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentOrder property.
     *
     * @param FBAOutboundServiceMWS_Model_FulfillmentOrder $value fulfillmentOrder
     * @return $this This instance
     */
    public function setFulfillmentOrder($value)
    {
        $this->_fields['FulfillmentOrder']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentOrder is set.
     *
     * @return bool True if FulfillmentOrder is set.
     */
    public function isSetFulfillmentOrder()
    {
        return !is_null($this->_fields['FulfillmentOrder']['FieldValue']);
    }

    /**
     * Set the value of FulfillmentOrder, return this.
     *
     * @param fulfillmentOrder
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withFulfillmentOrder($value)
    {
        $this->setFulfillmentOrder($value);
        return $this;
    }

    /**
     * Get the value of the FulfillmentOrderItem property.
     *
     * @return FBAOutboundServiceMWS_Model_FulfillmentOrderItemList FulfillmentOrderItem.
     */
    public function getFulfillmentOrderItem()
    {
        return $this->_fields['FulfillmentOrderItem']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentOrderItem property.
     *
     * @param FBAOutboundServiceMWS_Model_FulfillmentOrderItemList $value fulfillmentOrderItem
     * @return $this This instance
     */
    public function setFulfillmentOrderItem($value)
    {
        $this->_fields['FulfillmentOrderItem']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentOrderItem is set.
     *
     * @return bool True if FulfillmentOrderItem is set.
     */
    public function isSetFulfillmentOrderItem()
    {
        return !is_null($this->_fields['FulfillmentOrderItem']['FieldValue']);
    }

    /**
     * Set the value of FulfillmentOrderItem, return this.
     *
     * @param fulfillmentOrderItem
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withFulfillmentOrderItem($value)
    {
        $this->setFulfillmentOrderItem($value);
        return $this;
    }

    /**
     * Get the value of the FulfillmentShipment property.
     *
     * @return FBAOutboundServiceMWS_Model_FulfillmentShipmentList FulfillmentShipment.
     */
    public function getFulfillmentShipment()
    {
        return $this->_fields['FulfillmentShipment']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentShipment property.
     *
     * @param FBAOutboundServiceMWS_Model_FulfillmentShipmentList $value fulfillmentShipment
     * @return $this This instance
     */
    public function setFulfillmentShipment($value)
    {
        $this->_fields['FulfillmentShipment']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentShipment is set.
     *
     * @return bool True if FulfillmentShipment is set.
     */
    public function isSetFulfillmentShipment()
    {
        return !is_null($this->_fields['FulfillmentShipment']['FieldValue']);
    }

    /**
     * Set the value of FulfillmentShipment, return this.
     *
     * @param fulfillmentShipment
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withFulfillmentShipment($value)
    {
        $this->setFulfillmentShipment($value);
        return $this;
    }

}
