<?php

namespace BingAds\v10\CampaignManagement;

/**
 * Updates targets in your target library.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn236301(v=msads.100).aspx UpdateTargetsInLibrary Request Object
 * 
 * @uses Target
 * @used-by BingAdsCampaignManagementService::UpdateTargetsInLibrary
 */
final class UpdateTargetsInLibraryRequest
{
    public $Targets;
}
