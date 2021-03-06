<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Braintree\Ui\Component\Report\Filters\Type;

use Magento\Ui\Component\Filters\Type\Date;

/**
 * Class DateRange
 */
class DateRange extends Date
{
    /**
     * Braintree date format
     *
     * @var string
     */
    protected static $dateFormat = 'Y-m-d\TH:i:00O';
}
