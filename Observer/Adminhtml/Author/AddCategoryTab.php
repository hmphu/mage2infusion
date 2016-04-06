<?php
namespace Sample\News\Observer\Adminhtml\Author;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class AddCategoryTab implements ObserverInterface
{
    /**
     * @param Observer $observer
     * @return $this
     */
    public function execute(Observer $observer)
    {
        /** @var \Magento\Catalog\Block\Adminhtml\Category\Tabs $tabs */
        $tabs = $observer->getEvent()->getTabs();
        $container = $tabs->getLayout()->createBlock(
            'Magento\Backend\Block\Template',
            'category.author.grid.wrapper'
        );
        /** @var \Magento\Backend\Block\Template  $container */
        $container->setTemplate('Ark_Infusion::catalog/category/author.phtml');
        $tab = $tabs->getLayout()->createBlock(
            'Sample\News\Block\Adminhtml\Catalog\Category\Tab\Author',
            'category.ark_infusion.author.grid'
        );

        $container->setChild('grid', $tab);
        $content = $container->toHtml();
        $tabs->addTab('ark_infusion_authors', array(
            'label'     => __('Authors'),
            'content'   => $content,
        ));
        return $this;
    }
}
