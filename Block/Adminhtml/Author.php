<?php
namespace Sample\News\Block\Adminhtml;

use Magento\Backend\Block\Widget\Grid\Container;

class Author extends Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_order';
        $this->_blockGroup = 'Ark_Infusion';
        $this->_headerText = __('Authors');
        $this->_addButtonLabel = __('Create New Author');
        parent::_construct();
    }
}
