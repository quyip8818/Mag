<?php
class Magentothem_Bestsellerproductvertscroller_Block_Bestsellerproductvertscroller extends Mage_Catalog_Block_Product_Abstract
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
	
	protected function useFlatCatalogProduct()
    {
        return Mage::getStoreConfig('catalog/frontend/flat_catalog_product');
    }
    
     public function getBestsellerproductvertscroller()     
     { 
        if (!$this->hasData('bestsellerproductvertscroller')) {
            $this->setData('bestsellerproductvertscroller', Mage::registry('bestsellerproductvertscroller'));
        }
        return $this->getData('bestsellerproductvertscroller');
        
    }
	public function getProducts()
    {
		$collection = Mage::getModel('catalog/product')->getCollection();
        $collection->addAttributeToSelect('*')->addStoreFilter();
        $orderItems = Mage::getSingleton('core/resource')->getTableName('sales/order_item');
        $orderMain =  Mage::getSingleton('core/resource')->getTableName('sales/order');
        $collection->getSelect()
            ->join(array('items' => $orderItems), "items.product_id = e.entity_id", array('count' => 'SUM(items.qty_ordered)'))
            ->join(array('trus' => $orderMain), "items.order_id = trus.entity_id", array())
            ->group('e.entity_id')
            ->order('count DESC');

        // getNumProduct
        $collection->setPageSize($this->getNumProduct());

        if($this->useFlatCatalogProduct())
        {
            // fix error mat image vs name while Enable useFlatCatalogProduct
            foreach ($collection as $product) 
            {
                $productId = $product->_data['entity_id'];
                $_product = Mage::getModel('catalog/product')->load($productId); //Product ID
                $product->_data['name']        = $_product->getName();
                $product->_data['thumbnail']   = $_product->getThumbnail();
                $product->_data['small_image'] = $_product->getSmallImage();
            }            
        }
		
		$this->setProductCollection($collection);
    }
	public function getConfig($att) 
	{
		$config = Mage::getStoreConfig('bestsellerproductvertscroller');
		if (isset($config['bestsellerproductvertscroller_config']) ) {
			$value = $config['bestsellerproductvertscroller_config'][$att];
			return $value;
		} else {
			throw new Exception($att.' value not set');
		}
	}
}