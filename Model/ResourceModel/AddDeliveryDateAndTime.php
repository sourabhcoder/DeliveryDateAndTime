<?php
/**
 * Copyright © sourabhcoder. All rights reserved.
 */
namespace Sourabh\DeliveryDateAndTime\Model\ResourceModel;

/**
 * Class AddDeliveryDateAndTime
 *
 * @package Sourabh\DeliveryDateAndTime\Model\ResourceModel
 */
class AddDeliveryDateAndTime extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     *
     * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfigInterface
     */
    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context,
                                \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfigInterface
    )
    {
        $this->scopeConfigInterface = $scopeConfigInterface;
        $this->resource = $context->getResources();
        parent::__construct($context);
    }

    public function _construct()
    {
        $this->_init('sourabh_delivery_date_and_time', 'id');
    }
}
