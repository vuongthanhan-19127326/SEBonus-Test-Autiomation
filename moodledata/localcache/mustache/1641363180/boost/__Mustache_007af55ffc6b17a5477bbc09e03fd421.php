<?php

class __Mustache_007af55ffc6b17a5477bbc09e03fd421 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'hasmenu' section
        $value = $context->find('hasmenu');
        $buffer .= $this->sectionCc46f8cfc3097cc50d621bcbfd5b1c2b($context, $indent, $value);

        return $buffer;
    }

    private function sectionCc46f8cfc3097cc50d621bcbfd5b1c2b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="section_action_menu ml-auto" data-sectionid="{{id}}">
    {{{menu}}}
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
                
                $buffer .= $indent . '<div class="section_action_menu ml-auto" data-sectionid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('menu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
