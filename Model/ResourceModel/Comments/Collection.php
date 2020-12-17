<?php

namespace Inchoo\Sample03\Model\ResourceModel\Comments;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Initialize news Collection
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Inchoo\Sample03\Model\Comments::class,
            \Inchoo\Sample03\Model\ResourceModel\Comments::class
        );
    }
}
