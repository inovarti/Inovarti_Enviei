<?php

/**
 * Enviei
 *
 * @category    Enviei
 * @package     Inovarti_Enviei
 * @copyright   Copyright (c) 2013 Inovarti. (http://www.inovarti.com.br)
 */
class Inovarti_Enviei_Model_System_Config_Source_Line {

    protected $_options;

    public function toOptionArray() {
        if (!$this->_options) {
            $this->_options = array(
                array('value' => '', 'label' => Mage::helper('enviei')->__('Empty')),
                array('value' => 1, 'label' => Mage::helper('enviei')->__('Street Line %s', 1)),
                array('value' => 2, 'label' => Mage::helper('enviei')->__('Street Line %s', 2)),
                array('value' => 3, 'label' => Mage::helper('enviei')->__('Street Line %s', 3)),
                array('value' => 4, 'label' => Mage::helper('enviei')->__('Street Line %s', 4))
            );
        }
        return $this->_options;
    }

}
