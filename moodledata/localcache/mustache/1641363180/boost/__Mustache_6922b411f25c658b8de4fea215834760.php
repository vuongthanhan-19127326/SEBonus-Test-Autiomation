<?php

class __Mustache_6922b411f25c658b8de4fea215834760 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid mb-1">
';
        $buffer .= $indent . '    <div class="submissionlinks row">
';
        $buffer .= $indent . '        <div class="col-xs-6 mr-3">
';
        $buffer .= $indent . '            <a class="btn btn-secondary mr-1" href="';
        $value = $this->resolveValue($context->find('submissionlink'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionCec9654120fc0ea26d541bb64856c696($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-xs-6">
';
        $buffer .= $indent . '            <a class="btn btn-primary" href="';
        $value = $this->resolveValue($context->find('gradelink'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section56ca90260d0df5e2c7f6eff1f217ee41($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionCec9654120fc0ea26d541bb64856c696(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'viewgrading, mod_assign';
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
                
                $buffer .= 'viewgrading, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56ca90260d0df5e2c7f6eff1f217ee41(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'gradeverb, core';
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
                
                $buffer .= 'gradeverb, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
