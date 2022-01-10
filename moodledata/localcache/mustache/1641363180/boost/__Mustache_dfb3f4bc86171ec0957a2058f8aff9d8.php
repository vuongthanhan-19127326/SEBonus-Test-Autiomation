<?php

class __Mustache_dfb3f4bc86171ec0957a2058f8aff9d8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="btn-group dropup mt-2" id="bulkactionsui-container">
';
        $buffer .= $indent . '    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="bulkactionsui-selector">
';
        $buffer .= $indent . '        ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section752da9fdacd1ff04ab460b65fb488b03($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <div class="dropdown-menu" aria-labelledby="bulkactionsui-selector">
';
        // 'bulkactionitems' section
        $value = $context->find('bulkactionitems');
        $buffer .= $this->sectionC719bf32c16195812be2e68da4d26c94($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section752da9fdacd1ff04ab460b65fb488b03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' withselected, question';
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
                
                $buffer .= ' withselected, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC719bf32c16195812be2e68da4d26c94(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <input type="submit" value="{{actionname}}" class="dropdown-item" name="{{actionkey}}" data-action="toggle" data-togglegroup="qbank"
                   data-toggle="action" form="questionsubmit" formaction="{{{actionurl}}}" disabled="disabled">
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
                
                $buffer .= $indent . '            <input type="submit" value="';
                $value = $this->resolveValue($context->find('actionname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="dropdown-item" name="';
                $value = $this->resolveValue($context->find('actionkey'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-action="toggle" data-togglegroup="qbank"
';
                $buffer .= $indent . '                   data-toggle="action" form="questionsubmit" formaction="';
                $value = $this->resolveValue($context->find('actionurl'), $context);
                $buffer .= $value;
                $buffer .= '" disabled="disabled">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
