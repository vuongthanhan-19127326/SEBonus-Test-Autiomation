<?php

class __Mustache_e7bd40bcd43703e3fd27bf975b1a92ec extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<span id="maincontent"></span>
';
        // 'title' section
        $value = $context->find('title');
        $buffer .= $this->sectionEf7edce4982ae8bdfc790d80ee13872c($context, $indent, $value);
        // 'completion' section
        $value = $context->find('completion');
        $buffer .= $this->section994cccd0a02a8bc7f127e60955d93169($context, $indent, $value);
        // 'description' section
        $value = $context->find('description');
        $buffer .= $this->section6e7db97a5aa3dae20f9f337b962c1709($context, $indent, $value);
        // 'additional_items' section
        $value = $context->find('additional_items');
        $buffer .= $this->sectionB290eb9f4a19dbbc0642e76856a0acf9($context, $indent, $value);

        return $buffer;
    }

    private function sectionEf7edce4982ae8bdfc790d80ee13872c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <h2>{{{title}}}</h2>
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
                
                $buffer .= $indent . '    <h2>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21485ddbf620161c42cce56fdf9efccf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' overallaggregation, completion ';
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
                
                $buffer .= ' overallaggregation, completion ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section994cccd0a02a8bc7f127e60955d93169(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="sr-only">{{#str}} overallaggregation, completion {{/str}}</span>
    {{{completion}}}
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
                
                $buffer .= $indent . '    <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section21485ddbf620161c42cce56fdf9efccf($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('completion'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6e7db97a5aa3dae20f9f337b962c1709(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="box py-3 generalbox" id="intro">
    {{{description}}}
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
                
                $buffer .= $indent . '    <div class="box py-3 generalbox" id="intro">
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4edf690e2a4ac24d0c576a6184c12a89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' additionalcustomnav, core ';
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
                
                $buffer .= ' additionalcustomnav, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB290eb9f4a19dbbc0642e76856a0acf9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <nav aria-label="{{#str}} additionalcustomnav, core {{/str}}">
        {{> core/url_select}}
    </nav>
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
                
                $buffer .= $indent . '    <nav aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4edf690e2a4ac24d0c576a6184c12a89($context, $indent, $value);
                $buffer .= '">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </nav>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
