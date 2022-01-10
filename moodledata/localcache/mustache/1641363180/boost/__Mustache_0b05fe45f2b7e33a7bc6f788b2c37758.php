<?php

class __Mustache_0b05fe45f2b7e33a7bc6f788b2c37758 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<span class="qbank-creator-name">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('creator'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '</span>
';
        $buffer .= $indent . '<br>
';
        $buffer .= $indent . '<span class="date">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('date'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '</span>
';

        return $buffer;
    }
}
