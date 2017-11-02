<?php

class StuntCoders_AdWordsConversion_Model_Source_Format
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array(
                'value' => '1',
                'label' => Mage::helper('adminhtml')->__('One line notification')
            ),
            array(
                'value' => '2',
                'label' => Mage::helper('adminhtml')->__('Multi line notification')
            ),
            array(
                'value' => '3',
                'label' => Mage::helper('adminhtml')->__('No notification')
            ),
        );
    }
}
