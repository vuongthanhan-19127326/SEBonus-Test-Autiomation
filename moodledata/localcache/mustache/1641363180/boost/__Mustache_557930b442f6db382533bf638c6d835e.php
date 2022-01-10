<?php

class __Mustache_557930b442f6db382533bf638c6d835e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'showmovehere' section
        $value = $context->find('showmovehere');
        $buffer .= $this->section92737a10595b16982d63e4082cecbb2a($context, $indent, $value);
        $buffer .= $indent . '<ul class="section m-0 p-0 img-text ';
        // 'hascms' section
        $value = $context->find('hascms');
        $buffer .= $this->sectionCa569640ac0eb97ec87d7a3431d80181($context, $indent, $value);
        $buffer .= '" data-for="cmlist">
';
        // 'cms' section
        $value = $context->find('cms');
        $buffer .= $this->sectionB09e0cc275c32f236595098523755bf0($context, $indent, $value);
        // 'showmovehere' section
        $value = $context->find('showmovehere');
        $buffer .= $this->section719a6649dda031770586f32a62e6e246($context, $indent, $value);
        $buffer .= $indent . '    </ul>
';

        return $buffer;
    }

    private function section48889b9f3f273ba8c7c463afc8a04b66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cancel ';
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
                
                $buffer .= ' cancel ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92737a10595b16982d63e4082cecbb2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<p>{{movingstr}} (<a href="{{{cancelcopyurl}}}">{{#str}} cancel {{/str}}</a>)</p>
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
                
                $buffer .= $indent . '<p>';
                $value = $this->resolveValue($context->find('movingstr'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' (<a href="';
                $value = $this->resolveValue($context->find('cancelcopyurl'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section48889b9f3f273ba8c7c463afc8a04b66($context, $indent, $value);
                $buffer .= '</a>)</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa569640ac0eb97ec87d7a3431d80181(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' d-block ';
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
                
                $buffer .= ' d-block ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4aa21bbc166aca81c06c2ddab92e812(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li class="movehere">
        <a href="{{{moveurl}}}" title="{{strmovefull}}" class="movehere"></a>
    </li>
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
                
                $buffer .= $indent . '    <li class="movehere">
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('moveurl'), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('strmovefull'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="movehere"></a>
';
                $buffer .= $indent . '    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA251744049c16ac53cde9b78e8bc06f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core_courseformat/local/content/section/cmitem}}
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
                
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/cmitem')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB09e0cc275c32f236595098523755bf0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#showmovehere}}
    <li class="movehere">
        <a href="{{{moveurl}}}" title="{{strmovefull}}" class="movehere"></a>
    </li>
    {{/showmovehere}}
    {{#cmitem}}
        {{> core_courseformat/local/content/section/cmitem}}
    {{/cmitem}}
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
                
                // 'showmovehere' section
                $value = $context->find('showmovehere');
                $buffer .= $this->sectionF4aa21bbc166aca81c06c2ddab92e812($context, $indent, $value);
                // 'cmitem' section
                $value = $context->find('cmitem');
                $buffer .= $this->sectionA251744049c16ac53cde9b78e8bc06f7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section719a6649dda031770586f32a62e6e246(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <li class="movehere">
        <a href="{{{movetosectionurl}}}" title="{{strmovefull}}" class="movehere"></a>
    </li>
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
                
                $buffer .= $indent . '    <li class="movehere">
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('movetosectionurl'), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('strmovefull'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="movehere"></a>
';
                $buffer .= $indent . '    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
