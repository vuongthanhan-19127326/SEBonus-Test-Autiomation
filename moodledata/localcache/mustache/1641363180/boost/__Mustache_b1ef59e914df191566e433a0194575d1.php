<?php

class __Mustache_b1ef59e914df191566e433a0194575d1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="choosecategory">
';
        $buffer .= $indent . '    <label class="mr-1" for="id_selectacategory">
';
        $buffer .= $indent . '        ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section8bde4c844e25dc536bfcc6f62017a0b8($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </label>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('categoryselect'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="boxaligncenter categoryinfo pl-0">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('categorydesc'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section8bde4c844e25dc536bfcc6f62017a0b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' selectacategory, question';
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
                
                $buffer .= ' selectacategory, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
