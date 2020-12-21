<?php

namespace Inchoo\Sample03\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class ListNewsBlock extends Template
{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }
}
