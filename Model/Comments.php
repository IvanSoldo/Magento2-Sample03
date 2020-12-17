<?php

namespace Inchoo\Sample03\Model;

class Comments extends \Magento\Framework\Model\AbstractModel
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

}
