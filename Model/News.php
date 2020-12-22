<?php

namespace Inchoo\Sample03\Model;

use Inchoo\Sample03\Api\Data\NewsInterface;

class News extends \Magento\Framework\Model\AbstractModel implements NewsInterface
{
    /**
     * Initialize news Model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Inchoo\Sample03\Model\ResourceModel\News::class);
    }

    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }
}
