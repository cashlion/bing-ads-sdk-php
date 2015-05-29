<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the possible status values of an account.
 *
 * @link http://msdn.microsoft.com/en-us/library/ff728394(v=msads.90).aspx AccountLifeCycleStatus Value Set
 *
 * @used-by Account
 * @used-by AccountInfo
 * @used-by AccountInfoWithCustomerData
 */
final class AccountLifeCycleStatus
{
    /** The account is in a draft state. */
    const DRAFT = 'Draft';
    /** The account is active, which means that the account and its campaigns can be managed and its ads served. */
    const ACTIVE = 'Active';
    /** The account is inactive, which means that the system deleted the account. */
    const INACTIVE = 'Inactive';
    /** For internal use only. */
    const PAUSE = 'Pause';
    /** For internal use only. */
    const PENDING = 'Pending';
    /** Your account has been suspended and no ads are eligible for delivery because of potentially fraudulent activity. */
    const SUSPENDED = 'Suspended';
}