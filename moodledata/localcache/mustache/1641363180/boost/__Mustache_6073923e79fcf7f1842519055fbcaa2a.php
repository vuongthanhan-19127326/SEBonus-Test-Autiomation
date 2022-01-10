<?php

class __Mustache_6073923e79fcf7f1842519055fbcaa2a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'showaddsection' section
        $value = $context->find('showaddsection');
        $buffer .= $this->sectionBbe3f6d1db1ad6b0c277294fe9ddac40($context, $indent, $value);

        return $buffer;
    }

    private function sectionD0146a3b4454c5bedc72ca5fe59e6e68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' increasesections, moodle ';
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
                
                $buffer .= ' increasesections, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73299e9d0dd79cf4a0279246aa5b3dc9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/switch_plus, moodle, {{#str}} increasesections, moodle {{/str}}';
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
                
                $buffer .= 't/switch_plus, moodle, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD0146a3b4454c5bedc72ca5fe59e6e68($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9bc4955e97b3e03de23dae13ffa6f74c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="{{{url}}}" class="increase-sections">
        {{#pix}}t/switch_plus, moodle, {{#str}} increasesections, moodle {{/str}}{{/pix}}
    </a>
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
                
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" class="increase-sections">
';
                $buffer .= $indent . '        ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section73299e9d0dd79cf4a0279246aa5b3dc9($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22686b7e0eacfe8762121dcc2f0e21db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reducesections, moodle ';
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
                
                $buffer .= ' reducesections, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8dc0fa6941aa91b751a414ccbee7293e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/switch_minus, moodle, {{#str}} reducesections, moodle {{/str}}';
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
                
                $buffer .= 't/switch_minus, moodle, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section22686b7e0eacfe8762121dcc2f0e21db($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5a549f24b624d4beba7d1296af460e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="{{{url}}}" class="reduce-sections">
        {{#pix}}t/switch_minus, moodle, {{#str}} reducesections, moodle {{/str}}{{/pix}}
    </a>
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
                
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" class="reduce-sections">
';
                $buffer .= $indent . '        ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section8dc0fa6941aa91b751a414ccbee7293e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section95103e0b0ba93f642b5a789ad318f6ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-id="{{id}}" ';
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
                
                $buffer .= ' data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA3ba3bd99eb726c5d657a58086005597(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a
        href="{{{url}}}"
        class="add-sections"
        data-add-sections="{{title}}"
        data-new-sections="{{newsection}}"
        data-action="addSection"
        {{#insertafter}} data-id="{{id}}" {{/insertafter}}
    >
        {{title}}
    </a>
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
                
                $buffer .= $indent . '    <a
';
                $buffer .= $indent . '        href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '        class="add-sections"
';
                $buffer .= $indent . '        data-add-sections="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '        data-new-sections="';
                $value = $this->resolveValue($context->find('newsection'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '        data-action="addSection"
';
                $buffer .= $indent . '        ';
                // 'insertafter' section
                $value = $context->find('insertafter');
                $buffer .= $this->section95103e0b0ba93f642b5a789ad318f6ca($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    >
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBbe3f6d1db1ad6b0c277294fe9ddac40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="changenumsections" class="mdl-left py-2">
    {{#increase}}
    <a href="{{{url}}}" class="increase-sections">
        {{#pix}}t/switch_plus, moodle, {{#str}} increasesections, moodle {{/str}}{{/pix}}
    </a>
    {{/increase}}
    {{#decrease}}
    <a href="{{{url}}}" class="reduce-sections">
        {{#pix}}t/switch_minus, moodle, {{#str}} reducesections, moodle {{/str}}{{/pix}}
    </a>
    {{/decrease}}
    {{#addsections}}
    <a
        href="{{{url}}}"
        class="add-sections"
        data-add-sections="{{title}}"
        data-new-sections="{{newsection}}"
        data-action="addSection"
        {{#insertafter}} data-id="{{id}}" {{/insertafter}}
    >
        {{title}}
    </a>
    {{/addsections}}
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
                
                $buffer .= $indent . '<div id="changenumsections" class="mdl-left py-2">
';
                // 'increase' section
                $value = $context->find('increase');
                $buffer .= $this->section9bc4955e97b3e03de23dae13ffa6f74c($context, $indent, $value);
                // 'decrease' section
                $value = $context->find('decrease');
                $buffer .= $this->sectionE5a549f24b624d4beba7d1296af460e2($context, $indent, $value);
                // 'addsections' section
                $value = $context->find('addsections');
                $buffer .= $this->sectionA3ba3bd99eb726c5d657a58086005597($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
