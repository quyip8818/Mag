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
 * @package     Varien_File
 * @copyright  Copyright (c) 2006-2015 X.commerce, Inc. (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

=======
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category   Varien
 * @package    Varien_File
 * @copyright  Copyright (c) 2008 Irubin Consulting Inc. DBA Varien (http://www.varien.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
 
>>>>>>> origin/master
/**
 * Csv parse
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Varien_File_Csv
{
    protected $_lineLength= 0;
    protected $_delimiter = ',';
    protected $_enclosure = '"';
<<<<<<< HEAD

    public function __construct()
    {

    }

=======
    
    public function __construct() 
    {
        
    }
    
>>>>>>> origin/master
    /**
     * Set max file line length
     *
     * @param   int $length
     * @return  Varien_File_Csv
     */
    public function setLineLength($length)
    {
        $this->_lineLength = $length;
        return $this;
    }
<<<<<<< HEAD

=======
    
>>>>>>> origin/master
    /**
     * Set CSV column delimiter
     *
     * @param   string $delimiter
     * @return  Varien_File_Csv
     */
    public function setDelimiter($delimiter)
    {
        $this->_delimiter = $delimiter;
        return $this;
    }
<<<<<<< HEAD

=======
    
>>>>>>> origin/master
    /**
     * Set CSV column value enclosure
     *
     * @param   string $enclosure
     * @return  Varien_File_Csv
     */
    public function setEnclosure($enclosure)
    {
        $this->_enclosure = $enclosure;
        return $this;
    }
<<<<<<< HEAD

=======
    
>>>>>>> origin/master
    /**
     * Retrieve CSV file data as array
     *
     * @param   string $file
     * @return  array
     */
    public function getData($file)
    {
        $data = array();
        if (!file_exists($file)) {
            throw new Exception('File "'.$file.'" do not exists');
        }
<<<<<<< HEAD

=======
        
>>>>>>> origin/master
        $fh = fopen($file, 'r');
        while ($rowData = fgetcsv($fh, $this->_lineLength, $this->_delimiter, $this->_enclosure)) {
            $data[] = $rowData;
        }
        fclose($fh);
        return $data;
    }
<<<<<<< HEAD

=======
    
>>>>>>> origin/master
    /**
     * Retrieve CSV file data as pairs
     *
     * @param   string $file
     * @param   int $keyIndex
     * @param   int $valueIndex
     * @return  array
     */
    public function getDataPairs($file, $keyIndex=0, $valueIndex=1)
    {
        $data = array();
        $csvData = $this->getData($file);
        foreach ($csvData as $rowData) {
<<<<<<< HEAD
            if (isset($rowData[$keyIndex])) {
                $data[$rowData[$keyIndex]] = isset($rowData[$valueIndex]) ? $rowData[$valueIndex] : null;
            }
        }
        return $data;
    }

=======
        	if (isset($rowData[$keyIndex])) {
        	    $data[$rowData[$keyIndex]] = isset($rowData[$valueIndex]) ? $rowData[$valueIndex] : null;
        	}
        }
        return $data;
    }
    
>>>>>>> origin/master
    /**
     * Saving data row array into file
     *
     * @param   string $file
     * @param   array $data
     * @return  Varien_File_Csv
     */
    public function saveData($file, $data)
    {
        $fh = fopen($file, 'w');
        foreach ($data as $dataRow) {
            $this->fputcsv($fh, $dataRow, $this->_delimiter, $this->_enclosure);
        }
        fclose($fh);
        return $this;
    }
<<<<<<< HEAD

=======
    
>>>>>>> origin/master
    public function fputcsv(&$handle, $fields = array(), $delimiter = ',', $enclosure = '"') {
        $str = '';
        $escape_char = '\\';
        foreach ($fields as $value) {
            if (strpos($value, $delimiter) !== false ||
                strpos($value, $enclosure) !== false ||
                strpos($value, "\n") !== false ||
                strpos($value, "\r") !== false ||
                strpos($value, "\t") !== false ||
                strpos($value, ' ') !== false) {
                $str2 = $enclosure;
                $escaped = 0;
                $len = strlen($value);
                for ($i=0;$i<$len;$i++) {
                    if ($value[$i] == $escape_char) {
                        $escaped = 1;
                    } else if (!$escaped && $value[$i] == $enclosure) {
                        $str2 .= $enclosure;
                    } else {
                        $escaped = 0;
                    }
                        $str2 .= $value[$i];
                }
                $str2 .= $enclosure;
                $str .= $str2.$delimiter;
            } else {
                $str .= $enclosure.$value.$enclosure.$delimiter;
            }
        }
        $str = substr($str,0,-1);
        $str .= "\n";
        return fwrite($handle, $str);
    }
<<<<<<< HEAD

=======
    
>>>>>>> origin/master
}
