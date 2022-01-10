<?php

class __Mustache_310a95343b5c7b2a8dda3dbcf06f8492 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '    <input type="hidden" name="qbshowtext" value="0" id="qbshowtext_off">
';
        $buffer .= $indent . '    <input id="qbshowtext_on" class="searchoptions mr-1" type="checkbox" value="1" name="qbshowtext" ';
        // 'checked' section
        $value = $context->find('checked');
        $buffer .= $this->sectionB6bbc8e340ee0a0d1fcb32ab02369f61($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '    <label for="qbshowtext_on">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section060adc0f980f767e483a190a860ca07f($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionB6bbc8e340ee0a0d1fcb32ab02369f61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' checked="checked" ';
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
                
                $buffer .= ' checked="checked" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section060adc0f980f767e483a190a860ca07f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showquestiontext, question ';
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
                
                $buffer .= ' showquestiontext, question ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
