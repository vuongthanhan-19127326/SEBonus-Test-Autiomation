<?php

class __Mustache_9e10cace8b573178b9a6e6fcd8766fe4 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="qbank_statistics discriminative_efficiency">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('discriminative_efficiency'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
