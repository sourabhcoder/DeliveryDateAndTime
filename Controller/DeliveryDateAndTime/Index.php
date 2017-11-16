<?php
/**
 * Copyright © sourabhcoder. All rights reserved.
 */
namespace Sourabh\DeliveryDateAndTime\Controller\DeliveryDateAndTime;

/**
 * Class Index
 *
 * @package Sourabh\DeliveryDateAndTime\Controller\DeliveryDateAndTime
 */
class Index extends \Magento\Framework\App\Action\Action
{

    /**
     *
     * @var \Magento\Framework\App\Action\Context
     */
    protected $context;

    /**
     *
     * @var \Magento\Checkout\Model\Session
     */
    protected $checkoutSession;

    /**
     *
     * @var \Sourabh\DeliveryDateAndTime\Model\AddDeliveryDateAndTimeFactory
     */
    protected $addDeliveryDateAndTimeFactory;
    
    public function __construct(
       \Magento\Framework\App\Action\Context $context,
       \Magento\Checkout\Model\Session $checkoutSession,
       \Sourabh\DeliveryDateAndTime\Model\AddDeliveryDateAndTimeFactory $addDeliveryDateAndTimeFactory
      )
    {
        parent::__construct($context);
        $this->checkoutSession = $checkoutSession;
        $this->addDeliveryDateAndTimeFactory = $addDeliveryDateAndTimeFactory;
    }
    public function execute()
    {
      $deliverydateandtimeadd = $this->addDeliveryDateAndTimeFactory->create()->load($this->checkoutSession->getData('quote_id_1'),'quote_id');
      if (empty($deliverydateandtimeadd->getData()))
      {
          $deliverydateandtimeadd = $this->addDeliveryDateAndTimeFactory->create();
      }
      $deliverydateandtimeadd->setQuoteId($this->checkoutSession->getData('quote_id_1'));
      $deliverydateandtimeadd->setDeliveryDateAndTime($this->_request->getParam('expdeliverydateandtime'));
      $deliverydateandtimeadd->save();
    }

}
