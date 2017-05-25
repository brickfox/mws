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
 * MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASINResponse
 *
 * Properties:
 * <ul>
 *
 * <li>GetLowestPricedOffersForASINResult: array</li>
 * <li>ResponseMetadata: MarketplaceWebServiceProducts_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MarketplaceWebServiceProducts_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASINResponse extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'GetLowestPricedOffersForASINResult' => array(
                'FieldValue' => array(),
                'FieldType' => array('MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASINResult')
            ),
            'ResponseMetadata' => array(
                'FieldValue' => null,
                'FieldType' => 'MarketplaceWebServiceProducts_Model_ResponseMetadata'
            ),
            'ResponseHeaderMetadata' => array(
                'FieldValue' => null,
                'FieldType' => 'MarketplaceWebServiceProducts_Model_ResponseHeaderMetadata'
            ),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the GetLowestPricedOffersForASINResult property.
     *
     * @return MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASINResult[] GetLowestPricedOffersForASINResult.
     */
    public function getGetLowestPricedOffersForASINResult()
    {
        if ($this->_fields['GetLowestPricedOffersForASINResult']['FieldValue'] == null) {
            $this->_fields['GetLowestPricedOffersForASINResult']['FieldValue'] = array();
        }
        return $this->_fields['GetLowestPricedOffersForASINResult']['FieldValue'];
    }

    /**
     * Set the value of the GetLowestPricedOffersForASINResult property.
     *
     * @param array $value getLowestPricedOffersForASINResult
     * @return $this This instance
     */
    public function setGetLowestPricedOffersForASINResult($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['GetLowestPricedOffersForASINResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear GetLowestPricedOffersForASINResult.
     */
    public function unsetGetLowestPricedOffersForASINResult()
    {
        $this->_fields['GetLowestPricedOffersForASINResult']['FieldValue'] = array();
    }

    /**
     * Check to see if GetLowestPricedOffersForASINResult is set.
     *
     * @return true if GetLowestPricedOffersForASINResult is set.
     */
    public function isSetGetLowestPricedOffersForASINResult()
    {
        return !empty($this->_fields['GetLowestPricedOffersForASINResult']['FieldValue']);
    }

    /**
     * Add values for GetLowestPricedOffersForASINResult, return this.
     *
     * @param getLowestPricedOffersForASINResult
     *             New values to add.
     *
     * @return $this This instance.
     */
    public function withGetLowestPricedOffersForASINResult()
    {
        foreach (func_get_args() as $GetLowestPricedOffersForASINResult) {
            $this->_fields['GetLowestPricedOffersForASINResult']['FieldValue'][] = $GetLowestPricedOffersForASINResult;
        }
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return MarketplaceWebServiceProducts_Model_ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param MarketplaceWebServiceProducts_Model_ResponseMetadata $value responseMetadata
     * @return $this This instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return MarketplaceWebServiceProducts_Model_ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param MarketplaceWebServiceProducts_Model_ResponseHeaderMetadata $value responseHeaderMetadata
     * @return $this This instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
        return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }

    /**
     * Construct MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASINResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     * @return MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASINResponse
     * @throws Exception
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetLowestPricedOffersForASINResponse']");
        if ($response->length == 1) {
            return new MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASINResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASINResponse from provided XML. 
                                  Make sure that GetLowestPricedOffersForASINResponse is a root element");
        }
    }

    /**
     * XML Representation for this object
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<GetLowestPricedOffersForASINResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetLowestPricedOffersForASINResponse>";
        return $xml;
    }

}
