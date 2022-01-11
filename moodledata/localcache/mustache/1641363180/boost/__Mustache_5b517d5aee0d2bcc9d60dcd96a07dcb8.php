<?php

class __Mustache_5b517d5aee0d2bcc9d60dcd96a07dcb8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="usermenu">
';
        // 'unauthenticateduser' section
        $value = $context->find('unauthenticateduser');
        $buffer .= $this->section047fa3e98bd36ff72ce4871bc41cc84d($context, $indent, $value);
        $buffer .= $indent . '   ';

        return $buffer;
    }

    private function section372dada88a87ec5a5336cd0b597b76c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loggedinasguest, core ';
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
                
                $buffer .= ' loggedinasguest, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD182cc626edac9168314bb67933bb372(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#str}} loggedinasguest, core {{/str}}
                <div class="divider border-left h-75 align-self-center mx-2"></div>
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
                
                $buffer .= $indent . '                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section372dada88a87ec5a5336cd0b597b76c0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                <div class="divider border-left h-75 align-self-center mx-2"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section709c7103df2192436d0891976f85ca16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' login, core ';
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
                
                $buffer .= ' login, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd69bbef7e7b9e9a4517306133eac6d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{url}}">{{#str}} login, core {{/str}}</a>
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
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section709c7103df2192436d0891976f85ca16($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section047fa3e98bd36ff72ce4871bc41cc84d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="login pl-2">
            {{#guest}}
                {{#str}} loggedinasguest, core {{/str}}
                <div class="divider border-left h-75 align-self-center mx-2"></div>
            {{/guest}}
            {{#url}}
                <a href="{{url}}">{{#str}} login, core {{/str}}</a>
            {{/url}}
        </span>
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
                
                $buffer .= $indent . '        <span class="login pl-2">
';
                // 'guest' section
                $value = $context->find('guest');
                $buffer .= $this->sectionD182cc626edac9168314bb67933bb372($context, $indent, $value);
                // 'url' section
                $value = $context->find('url');
                $buffer .= $this->sectionFd69bbef7e7b9e9a4517306133eac6d3($context, $indent, $value);
                $buffer .= $indent . '        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
