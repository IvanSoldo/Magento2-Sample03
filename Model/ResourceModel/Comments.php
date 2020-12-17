<?php

namespace Inchoo\Sample03\Model\ResourceModel;

class Comments extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize news Resource
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('inchoo_news_comments', 'comment_id');
    }
}
