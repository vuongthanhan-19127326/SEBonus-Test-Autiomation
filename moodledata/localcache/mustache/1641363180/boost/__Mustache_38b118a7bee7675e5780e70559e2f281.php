<?php

class __Mustache_38b118a7bee7675e5780e70559e2f281 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="qbank_statistics facility_index">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('facility_index'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
