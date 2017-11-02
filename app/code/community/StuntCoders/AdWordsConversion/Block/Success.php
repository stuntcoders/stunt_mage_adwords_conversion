<?php

class StuntCoders_AdWordsConversion_Block_Success extends Mage_Core_Block_Template
{
    /**
     * @return int
     */
    public function getConversionId()
    {
        return $this->_getHelper()->getConversionId();
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->_getHelper()->getLabel();
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->_getHelper()->getColor();
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->_getHelper()->getLanguage();
    }

    /**
     * @return int
     */
    public function getConversionFormat()
    {
        return $this->_getHelper()->getConversionFormat();
    }

    /**
     * @return string
     */
    public function isGoogleRemarketingOnly()
    {
        return $this->_getHelper()->isGoogleRemarketingOnly();
    }

    /**
     * @return string
     */
    public function getGrandTotal()
    {
        return $this->_getOrder()->getGrandTotal();
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->_getOrder()->getOrderCurrencyCode();
    }

    /**
     * @return Mage_Sales_Model_Order
     */
    protected function _getOrder()
    {
        if (!$this->getData('_order')) {
            $orderIds = $this->getData('order_ids');

            if (empty($orderIds) || !is_array($orderIds)) {
                $order = Mage::getModel('sales/order');
            } else {
                $order = Mage::getResourceModel('sales/order_collection')
                    ->addFieldToFilter('entity_id', array('in' => $orderIds))
                    ->getFirstItem();
            }

            $this->setData('_order', $order);
        }

        return $this->getData('_order');
    }

    /**
     * @return string
     */
    protected function _toHtml()
    {
        if (!$this->_getHelper()->isEnabled()) {
            return '';
        }

        return parent::_toHtml();
    }

    /**
     * @return StuntCoders_AdWordsConversion_Helper_Data
     */
    protected function _getHelper()
    {
        return Mage::helper('stuntcoders_adwordsconversion');
    }
}
