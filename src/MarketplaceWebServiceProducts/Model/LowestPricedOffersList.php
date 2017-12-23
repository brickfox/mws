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
 * MarketplaceWebServiceProducts_Model_LowestPricedOffersList
 *
 * Properties:
 * <ul>
 *
 * <li>Offer: array</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_LowestPricedOffersList extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'Offer' => array(
                'FieldValue' => array(),
                'FieldType' => array('MarketplaceWebServiceProducts_Model_LowestPricedOffer')
            ),
        );
        parent::__construct($data);
    }
}
