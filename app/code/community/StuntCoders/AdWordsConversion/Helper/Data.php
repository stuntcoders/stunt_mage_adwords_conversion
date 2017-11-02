<?php

class StuntCoders_AdWordsConversion_Helper_Data extends Mage_Core_Helper_Abstract
{
    const IS_ENABLED = 'stuntcoders_adwordsconversion/general/enabled';

    const CONVERSION_ID = 'stuntcoders_adwordsconversion/general/conversion_id';
    const CONVERSION_LABEL = 'stuntcoders_adwordsconversion/general/label';
    const CONVERSION_FORMAT = 'stuntcoders_adwordsconversion/general/format';
    const CONVERSION_LANGUAGE = 'stuntcoders_adwordsconversion/general/language';
    const CONVERSION_COLOR = 'stuntcoders_adwordsconversion/general/color';
    const REMARKETING_ONLY = 'stuntcoders_adwordsconversion/general/remarketing_only';

    /**
     * @param mixed $storeId
     * @return mixed
     */
    public function isEnabled($storeId = null)
    {
        return Mage::getStoreConfigFlag(self::IS_ENABLED, $storeId);
    }

    /**
     * @param mixed $storeId
     * @return int
     */
    public function getConversionId($storeId = null)
    {
        return Mage::getStoreConfig(self::CONVERSION_ID, $storeId);
    }

    /**
     * @param mixed $storeId
     * @return int
     */
    public function getLabel($storeId = null)
    {
        return Mage::getStoreConfig(self::CONVERSION_LABEL, $storeId);
    }

    /**
     * @param mixed $storeId
     * @return int
     */
    public function getConversionFormat($storeId = null)
    {
        return Mage::getStoreConfig(self::CONVERSION_FORMAT, $storeId);
    }

    /**
     * @param mixed $storeId
     * @return string
     */
    public function getColor($storeId = null)
    {
        return Mage::getStoreConfig(self::CONVERSION_COLOR, $storeId);
    }

    /**
     * @param mixed $storeId
     * @return string
     */
    public function getLanguage($storeId = null)
    {
        return Mage::getStoreConfig(self::CONVERSION_LANGUAGE, $storeId);
    }

    /**
     * @param mixed $storeId
     * @return string
     */
    public function isGoogleRemarketingOnly($storeId = null)
    {
        return Mage::getStoreConfigFlag(self::REMARKETING_ONLY, $storeId) ? 'true' : 'false';
    }
}
