<?php

class Magentothem_Revslider_Model_Mysql4_Caption_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('revslider/caption');
    }
	public function addAttributeToFilter($field,$value) {
	
	  $this->addFieldToFilter($field, $value);
        return $this;
	}
}