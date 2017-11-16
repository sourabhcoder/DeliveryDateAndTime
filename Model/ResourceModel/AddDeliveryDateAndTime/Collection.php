<?php
/**
 * Copyright © sourabhcoder. All rights reserved.
 */
namespace Sourabh\DeliveryDateAndTime\Model\ResourceModel\AddDeliveryDateAndTime;

/**
 * Class Collection
 *
 * @package Sourabh\DeliveryDateAndTime\Model\ResourceModel\AddDeliveryDateAndTime
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Sourabh\DeliveryDateAndTime\Model\AddDeliveryDateAndTime', 'Sourabh\DeliveryDateAndTime\Model\ResourceModel\AddDeliveryDateAndTime');
    }
}
