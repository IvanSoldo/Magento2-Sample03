<?php
namespace Inchoo\Sample03\Block;
use Inchoo\Sample03\Model\ResourceModel\News\CollectionFactory;
use Magento\Framework\View\Element\Template;
class View extends Template
{
    protected $newsCollection;
    public function __construct(Template\Context $context, CollectionFactory $newsCollectionFactory, array $data = [])
    {
        parent::__construct($context, $data);
        $this->newsCollection = $newsCollectionFactory;
    }
    public function showNews($id)
    {
        $id = $this->getRequest()->getParam('id', $id);
        $news = $this->newsCollection->create()->addFieldToFilter('news_id', ['id' => $id])->getFirstItem();
        $data = $news->getData();
        return $data;
    }
}
