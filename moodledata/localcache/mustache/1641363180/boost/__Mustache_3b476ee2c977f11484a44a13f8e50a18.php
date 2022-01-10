<?php

class __Mustache_3b476ee2c977f11484a44a13f8e50a18 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_form/element-text-inline')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
