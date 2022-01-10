<?php

class __Mustache_22cf762a63de5ee4cda72b5fa9e5b98e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid mb-1">
';
        $buffer .= $indent . '    <div class="row">
';
        // 'submit' section
        $value = $context->find('submit');
        $buffer .= $this->section5d0091a77918937e9a21f3507213e8d4($context, $indent, $value);
        // 'previoussubmission' section
        $value = $context->find('previoussubmission');
        $buffer .= $this->section5d0091a77918937e9a21f3507213e8d4($context, $indent, $value);
        // 'edit' section
        $value = $context->find('edit');
        $buffer .= $this->section5d0091a77918937e9a21f3507213e8d4($context, $indent, $value);
        // 'remove' section
        $value = $context->find('remove');
        $buffer .= $this->section3e87714e153797324dc410ea382ddbad($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionD6443b84b1653022c69e246856e040eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{>core/single_button}}
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
                
                if ($partial = $this->mustache->loadPartial('core/single_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2729f8701c7613ee81710a969814c747(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{>core/help_icon}}
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
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d0091a77918937e9a21f3507213e8d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="col-xs-6 mr-3">
            {{#button}}
                {{>core/single_button}}
            {{/button}}
            {{#help}}
                {{>core/help_icon}}
            {{/help}}
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
                
                $buffer .= $indent . '        <div class="col-xs-6 mr-3">
';
                // 'button' section
                $value = $context->find('button');
                $buffer .= $this->sectionD6443b84b1653022c69e246856e040eb($context, $indent, $value);
                // 'help' section
                $value = $context->find('help');
                $buffer .= $this->section2729f8701c7613ee81710a969814c747($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3e87714e153797324dc410ea382ddbad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="col-xs-6">
            {{#button}}
                {{>core/single_button}}
            {{/button}}
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
                
                $buffer .= $indent . '        <div class="col-xs-6">
';
                // 'button' section
                $value = $context->find('button');
                $buffer .= $this->sectionD6443b84b1653022c69e246856e040eb($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
