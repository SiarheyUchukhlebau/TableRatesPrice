<?php
/**
 * Copyright © MageWorx. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace Vendor\TableRatesPrice\Plugin;

use Magento\OfflineShipping\Model\Carrier\Tablerate;
use Magento\Quote\Model\Quote\Address\RateRequest;
use Magento\Shipping\Model\Rate\Result as RateResult;

/**
 * Class ChangeRatesPrice
 */
class ChangeRatesPrice
{
    public function afterCollectRates(Tablerate $subject, RateResult $result, RateRequest $request)
    {
        //Do your logic before this line and return your custom price.
        $shippingPrice = 50;
        foreach ($result->getAllRates() as $method) {
            $method->setPrice($shippingPrice);
        }

        return $result;
    }
}
