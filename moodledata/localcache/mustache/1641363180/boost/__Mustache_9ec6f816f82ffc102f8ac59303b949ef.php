<?php

class __Mustache_9ec6f816f82ffc102f8ac59303b949ef extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<th class="header ';
        $value = $this->resolveValue($context->find('extraclasses'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" scope="col">
';
        // 'title' section
        $value = $context->find('title');
        $buffer .= $this->section110e577f3cbee68d890b74fecd39c549($context, $indent, $value);
        // 'sortable' inverted section
        $value = $context->find('sortable');
        if (empty($value)) {
            
            // 'sorttip' inverted section
            $value = $context->find('sorttip');
            if (empty($value)) {
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('tiptitle'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
            }
            // 'sorttip' section
            $value = $context->find('sorttip');
            $buffer .= $this->sectionE3e4c5841098259f2511891781a4f169($context, $indent, $value);
        }
        // 'sortable' section
        $value = $context->find('sortable');
        $buffer .= $this->section2a7c45e22947c028c20140826b461f5c($context, $indent, $value);
        $buffer .= $indent . '</th>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section110e577f3cbee68d890b74fecd39c549(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="title">{{title}}</div>
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
                
                $buffer .= $indent . '        <div class="title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3e4c5841098259f2511891781a4f169(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span title="{{tip}}">{{{tiptitle}}}</span>
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
                
                $buffer .= $indent . '            <span title="';
                $value = $this->resolveValue($context->find('tip'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('tiptitle'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a7c45e22947c028c20140826b461f5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="sorters">
            {{{sortlinks}}}
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
                
                $buffer .= $indent . '        <div class="sorters">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('sortlinks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
