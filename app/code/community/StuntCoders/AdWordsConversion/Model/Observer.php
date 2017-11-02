<?php

class StuntCoders_AdWordsConversion_Model_Observer
{
    /**
     * @param Varien_Event_Observer $observer
     */
    public function orderSuccessPageView(Varien_Event_Observer $observer)
    {
        $orderIds = $observer->getEvent()->getData('order_ids');
        if (empty($orderIds) || !is_array($orderIds)) {
            return;
        }

        $block = Mage::app()->getFrontController()->getAction()->getLayout()->getBlock('stuntcoders.adwords.conversion');
        if ($block) {
            $block->setData('order_ids', $orderIds);
        }
    }
}
