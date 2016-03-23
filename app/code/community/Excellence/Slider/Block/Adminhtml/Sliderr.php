<?php
class Excellence_Slider_Block_Adminhtml_Sliderr extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_slider_index_caption';
    $this->_blockGroup = 'slider';
    $this->_headerText = Mage::helper('slider')->__('Slider Manager');
    $this->_addButtonLabel = Mage::helper('slider')->__('Add Item');
    parent::__construct();
  }
}