<?php

namespace BingAds\v10\AdInsight;

/**
 * Defines an object that contains the keyword and the estimated bid value for each match type.
 *
 * @link http://msdn.microsoft.com/en-us/library/mt219290(v=msads.100).aspx KeywordEstimatedBid Data Object
 * 
 * @uses EstimatedBidAndTraffic
 * @used-by KeywordIdEstimatedBid
 * @used-by GetEstimatedBidByKeywordsResponse
 */
final class KeywordEstimatedBid
{
    /**
     * The keyword to which the estimates apply.
     *
     * @var string
     */
    public $Keyword;
    /**
     * A list of EstimatedBidAndTraffic objects that contains the suggested bid value for the keyword and match type.
     *
     * @var EstimatedBidAndTraffic[]
     */
    public $EstimatedBids;
}
