<?php

class __Mustache_e3bf31bc4d1ab13f194e973afb533eea extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<span class="qbank-creator-name">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('modifier'), $context);
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
