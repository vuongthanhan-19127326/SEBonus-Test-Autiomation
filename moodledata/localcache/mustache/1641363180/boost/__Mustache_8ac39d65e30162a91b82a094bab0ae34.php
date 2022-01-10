<?php

class __Mustache_8ac39d65e30162a91b82a094bab0ae34 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="qbank_statistics discrimination_index ';
        $value = $this->resolveValue($context->find('classes'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('discrimination_index'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
