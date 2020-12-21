<?php

namespace Inchoo\Sample03\Setup;

use Inchoo\Sample03\Model\NewsFactory;
use Inchoo\Sample03\Model\ResourceModel\News;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    protected $newsFactory;
    protected $newsResource;

    public function __construct(News $newsResource, NewsFactory $newsFactory)
    {
        $this->newsFactory = $newsFactory;
        $this->newsResource = $newsResource;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        for ($i = 1; $i < 10; $i++) {
            $news = $this->newsFactory->create();
            $news->setTitle($i . '. news');
            $this->newsResource->save($news);
        }
    }
}
