<?php

class __Mustache_b2409ee0e18a08224d0ce62260ccc67b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid mb-2">
';
        $buffer .= $indent . '    <div class="row justify-content-between">
';
        $buffer .= $indent . '        <div class="float-left">
';
        $buffer .= $indent . '            <a class="btn btn-secondary" href="';
        $value = $this->resolveValue($context->find('back'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section5f538765ec09bafda155baa649e275d1($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="float-right">
';
        $buffer .= $indent . '            <a class="btn btn-secondary" href="';
        $value = $this->resolveValue($context->find('downloadall'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9e24ff531e4d234fcdfa300f68917c60($context, $indent, $value);
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

    private function section5f538765ec09bafda155baa649e275d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'back, mod_assign';
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
                
                $buffer .= 'back, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e24ff531e4d234fcdfa300f68917c60(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'downloadall, mod_assign';
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
                
                $buffer .= 'downloadall, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
