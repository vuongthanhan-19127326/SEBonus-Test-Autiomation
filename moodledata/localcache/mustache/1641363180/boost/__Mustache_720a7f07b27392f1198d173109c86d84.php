<?php

class __Mustache_720a7f07b27392f1198d173109c86d84 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="createnewquestion mb-1">
';
        // 'canadd' inverted section
        $value = $context->find('canadd');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section917ee06a848ed615db0a90a59a4c7e59($context, $indent, $value);
            $buffer .= '
';
        }
        // 'canadd' section
        $value = $context->find('canadd');
        $buffer .= $this->section4dec527fbe433ce011decdd5de08afd4($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section917ee06a848ed615db0a90a59a4c7e59(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nopermissionadd, question';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nopermissionadd, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4dec527fbe433ce011decdd5de08afd4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{{buttonhtml}}}
        <div id="qtypechoicecontainer">
            {{{qtypeform}}}
        </div>
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('buttonhtml'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        <div id="qtypechoicecontainer">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('qtypeform'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
