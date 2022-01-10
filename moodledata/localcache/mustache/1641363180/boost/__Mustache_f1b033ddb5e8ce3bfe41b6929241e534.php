<?php

class __Mustache_f1b033ddb5e8ce3bfe41b6929241e534 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<input type="';
        $value = $this->resolveValue($context->find('type'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" value="';
        $value = $this->resolveValue($context->find('value'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="btn btn-secondary">
';

        return $buffer;
    }
}
