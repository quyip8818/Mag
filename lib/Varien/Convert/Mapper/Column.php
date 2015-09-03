<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
<<<<<<< HEAD
 * to license@magento.com so we can send you a copy immediately.
=======
 * to license@magentocommerce.com so we can send you a copy immediately.
>>>>>>> origin/master
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
<<<<<<< HEAD
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Varien
 * @package     Varien_Convert
 * @copyright  Copyright (c) 2006-2015 X.commerce, Inc. (http://www.magento.com)
=======
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category   Varien
 * @package    Varien_Convert
 * @copyright  Copyright (c) 2008 Irubin Consulting Inc. DBA Varien (http://www.varien.com)
>>>>>>> origin/master
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * Convert column mapper
 *
 * @category   Varien
 * @package    Varien_Convert
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Varien_Convert_Mapper_Column extends Varien_Convert_Mapper_Abstract
{
<<<<<<< HEAD
    public function map()
=======
	public function map()
>>>>>>> origin/master
    {
        $data = $this->getData();
        $this->validateDataGrid($data);
        if ($this->getVars() && is_array($this->getVars())) {
<<<<<<< HEAD
            $attributesToSelect = $this->getVars();
        } else {
            $attributesToSelect = array();
=======
        	$attributesToSelect = $this->getVars();
        } else {
        	$attributesToSelect = array();
>>>>>>> origin/master
        }
        $onlySpecified = (bool)$this->getVar('_only_specified')===true;
        $mappedData = array();
        foreach ($data as $i=>$row) {
            $newRow = array();
            foreach ($row as $field=>$value) {
<<<<<<< HEAD
                if(!$onlySpecified || $onlySpecified && isset($attributesToSelect[$field])) {
                    $newRow[$this->getVar($field, $field)] = $value;
                }
=======
            	if(!$onlySpecified || $onlySpecified && isset($attributesToSelect[$field])) {
            		$newRow[$this->getVar($field, $field)] = $value;
            	}
>>>>>>> origin/master
            }
            $mappedData[$i] = $newRow;
        }
        $this->setData($mappedData);
        return $this;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> origin/master
