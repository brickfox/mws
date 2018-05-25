<?php
/**
 *  PHP Version 5
 *
 * @category    Amazon
 * @package     MarketplaceWebServiceProducts
 * @copyright   Copyright 2008-2012 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 * @link        http://aws.amazon.com
 * @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 * @version     2011-10-01
 */

/*******************************************************************************
 *
 *  Marketplace Web Service Products PHP5 Library
 *
 */
class MarketplaceWebService_Model_ResponseHeaderMetadata
{

    const REQUEST_ID = 'x-mws-request-id';
    const RESPONSE_CONTEXT = 'x-mws-response-context';
    const TIMESTAMP = 'x-mws-timestamp';
    const QUOTA_MAX = 'x-mws-quota-max';
    const QUOTA_REMAINING = 'x-mws-quota-remaining';
    const QUOTA_RESETSON = 'x-mws-quota-resetson';

    private $metadata = array();

    public function __construct($requestId = null, $responseContext = null, $timestamp = null, $quotaMax = null, $quotaRemaining = null, $quotaResetson = null)
    {
        $this->metadata[self::REQUEST_ID] = $requestId;
        $this->metadata[self::RESPONSE_CONTEXT] = $responseContext;
        $this->metadata[self::TIMESTAMP] = $timestamp;
        $this->metadata[self::QUOTA_MAX] = $quotaMax;
        $this->metadata[self::QUOTA_REMAINING] = $quotaRemaining;
        $this->metadata[self::QUOTA_RESETSON] = $quotaResetson;
    }


    public function getRequestId()
    {
        return $this->metadata[self::REQUEST_ID];
    }

    public function getResponseContext()
    {
        return $this->metadata[self::RESPONSE_CONTEXT];
    }

    public function getTimestamp()
    {
        return $this->metadata[self::TIMESTAMP];
    }

    public function getQuotaMax()
    {
        return $this->metadata[self::QUOTA_MAX];
    }

    public function getQuotaRemaining()
    {
        return $this->metadata[self::QUOTA_REMAINING];
    }

    public function getQuotaResetson()
    {
        return $this->metadata[self::QUOTA_RESETSON];
    }

    public function __toString()
    {
        return join(', ', [
            "RequestId: " . $this->getRequestId(),
            "ResponseContext: " . $this->getResponseContext(),
            "Timestamp: " . $this->getTimestamp(),
            "QuotaMax: " . $this->getQuotaMax(),
            "QuotaRemaining: " . $this->getQuotaRemaining(),
            "QuotaResetson: " . $this->getQuotaResetson(),
        ]);
    }
}

