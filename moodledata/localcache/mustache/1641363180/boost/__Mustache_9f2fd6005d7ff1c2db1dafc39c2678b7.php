<?php

class __Mustache_9f2fd6005d7ff1c2db1dafc39c2678b7 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '    <strong>';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</strong> ';
        $value = $this->resolveValue($context->find('datestring'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
