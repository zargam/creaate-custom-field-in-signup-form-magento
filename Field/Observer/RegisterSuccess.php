<?php
namespace Custom\Field\Observer;  
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class RegisterSuccess implements ObserverInterface
{
    public function __construct()
    {
        // Observer initialization code...
        // You can use dependency injection to get any class this observer may need.
    }

    public function execute(Observer $observer)
    {
        //$myEventData = $observer->getData('myEventData');
		$myEventData=$observer->getEvent()->getData('customer');
		print_r($myEventData);
		exit;
        // Additional observer execution code...
    }
}