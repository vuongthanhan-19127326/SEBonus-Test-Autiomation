<?php

class __Mustache_9b3b803a40e719525f15e027960ffdd7 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<a href="';
        $value = $this->resolveValue($context->find('sorturl'), $context);
        $buffer .= $value;
        $buffer .= '" title="';
        $value = $this->resolveValue($context->find('sorttip'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('sortcontent'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</a>
';
        $buffer .= $indent . '
';

        return $buffer;
    }
}
