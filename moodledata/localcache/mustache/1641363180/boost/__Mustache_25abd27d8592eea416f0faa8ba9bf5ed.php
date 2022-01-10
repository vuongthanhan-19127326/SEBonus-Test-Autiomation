<?php

class __Mustache_25abd27d8592eea416f0faa8ba9bf5ed extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'highlighted' section
        $value = $context->find('highlighted');
        $buffer .= $this->section323cf0bd642e2aae437d9ddc325b0c25($context, $indent, $value);
        // 'hiddenfromstudents' section
        $value = $context->find('hiddenfromstudents');
        $buffer .= $this->sectionC35b1dcb5a9da132866feab0ee6ee8c3($context, $indent, $value);
        // 'notavailable' section
        $value = $context->find('notavailable');
        $buffer .= $this->section800de31358c0c4f8c98121412b1f8e89($context, $indent, $value);

        return $buffer;
    }

    private function sectionE24236d574cd94bfb8b4779c142666a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'highlighted';
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
                
                $buffer .= 'highlighted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section323cf0bd642e2aae437d9ddc325b0c25(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="badge badge-pill badge-primary order-1" data-type="highlighted">{{#str}}highlighted{{/str}}</span>
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
                
                $buffer .= $indent . '    <span class="badge badge-pill badge-primary order-1" data-type="highlighted">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE24236d574cd94bfb8b4779c142666a4($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa413acb7776474efcb52c4cbf9fc6f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hiddenfromstudents';
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
                
                $buffer .= 'hiddenfromstudents';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC35b1dcb5a9da132866feab0ee6ee8c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="badge badge-pill badge-warning order-2" data-type="hiddenfromstudents">{{#str}}hiddenfromstudents{{/str}}</span>
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
                
                $buffer .= $indent . '    <span class="badge badge-pill badge-warning order-2" data-type="hiddenfromstudents">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAa413acb7776474efcb52c4cbf9fc6f9($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31ae0fbdc439c6d3e86010ee0fe2597e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'notavailable';
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
                
                $buffer .= 'notavailable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section800de31358c0c4f8c98121412b1f8e89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="badge badge-pill badge-secondary order-3">{{#str}}notavailable{{/str}}</span>
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
                
                $buffer .= $indent . '    <span class="badge badge-pill badge-secondary order-3">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section31ae0fbdc439c6d3e86010ee0fe2597e($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
