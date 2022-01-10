<?php

class __Mustache_b5b77a1696fff8dbd53a972dc959e82e extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="p-2 d-flex list-group-item border-0" data-region="placeholder">
';
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '        class="rounded-circle bg-pulse-grey"
';
        $buffer .= $indent . '        style="height: 38px; width: 38px"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '        class="ml-2 bg-pulse-grey w-50"
';
        $buffer .= $indent . '        style="height: 20px;"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
