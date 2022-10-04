<?php
/**
 * Copyright © 2022 - Codegenixuk All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Codegenixuk\FooterImages\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\App\Helper\Context $context
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    public function getContent($block = 'block1')
    {
        return $this->scopeConfig->getValue(
            'codegenixuk_footerimages/' . $block . '/content',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getTitle()
    {
        return $this->scopeConfig->getValue(
            'codegenixuk_footerimages/config/title',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getSubTitle()
    {
        return $this->scopeConfig->getValue(
            'codegenixuk_footerimages/config/subtitle',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
