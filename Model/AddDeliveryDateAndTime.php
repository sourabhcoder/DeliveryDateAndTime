<?php
/**
 * Copyright © sourabhcoder. All rights reserved.
 */
namespace Sourabh\DeliveryDateAndTime\Model;

/**
 * Class AddDeliveryDateAndTime
 *
 * @package Sourabh\DeliveryDateAndTime\Model
 */
class AddDeliveryDateAndTime extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Sourabh\DeliveryDateAndTime\Model\ResourceModel\AddDeliveryDateAndTime');
    }
}

