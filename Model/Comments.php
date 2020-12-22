<?php

namespace Inchoo\Sample03\Model;

use Inchoo\Sample03\Api\Data\CommentInterface;

class Comments extends \Magento\Framework\Model\AbstractModel implements CommentInterface
{
    /**
     * Initialize news Model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Inchoo\Sample03\Model\ResourceModel\Comments::class);
    }

    public function getNewsId()
    {
        return $this->getData(self::NEWS_ID);
    }

    public function setNewsId($newsId)
    {
        return $this->setData(self::NEWS_ID, $newsId);
    }
}
