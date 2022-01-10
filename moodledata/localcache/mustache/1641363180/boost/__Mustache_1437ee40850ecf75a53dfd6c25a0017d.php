<?php

class __Mustache_1437ee40850ecf75a53dfd6c25a0017d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'component' section
        $value = $context->find('component');
        $buffer .= $this->sectionF52953292159655d712c60f7e724c659($context, $indent, $value);
        // 'component' inverted section
        $value = $context->find('component');
        if (empty($value)) {
            
            $buffer .= $indent . '    ';
            $value = $this->resolveValue($context->find('displayvalue'), $context);
            $buffer .= $value;
            $buffer .= '
';
        }
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section5d531aa4621891223a040b8c852eb9de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{displayvalue}}}';
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
                
                $value = $this->resolveValue($context->find('displayvalue'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c0ef0d2a3fff419a40cec8e05910f45(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{key}}, {{component}}, {{{title}}}';
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
                
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCac6a6ab08930840c02d0c169eaeedba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#pix}}{{key}}, {{component}}, {{{title}}}{{/pix}}';
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
                
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section0c0ef0d2a3fff419a40cec8e05910f45($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD47d1e0ac637346042b2f49951054846(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core/inplace_editable\']);
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
                
                $buffer .= $indent . '    require([\'core/inplace_editable\']);
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF52953292159655d712c60f7e724c659(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<span class="inplaceeditable inplaceeditable-{{type}}" data-inplaceeditable="1" data-component="{{component}}" data-itemtype="{{itemtype}}" data-itemid="{{itemid}}"
    data-value="{{value}}" data-editlabel="{{editlabel}}" data-type="{{type}}" data-options="{{options}}">
        {{^ linkeverything }}{{{displayvalue}}}{{/ linkeverything }}
        <a href="#" class="quickeditlink aalink" data-inplaceeditablelink="1" title="{{edithint}}">
            {{# linkeverything }}{{{displayvalue}}}{{/ linkeverything }}
            <span class="quickediticon visibleifjs">
                {{#editicon}}{{#pix}}{{key}}, {{component}}, {{{title}}}{{/pix}}{{/editicon}}
            </span>
        </a>
</span>
{{#js}}
    require([\'core/inplace_editable\']);
{{/js}}
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
                
                $buffer .= $indent . '<span class="inplaceeditable inplaceeditable-';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-inplaceeditable="1" data-component="';
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-itemtype="';
                $value = $this->resolveValue($context->find('itemtype'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-itemid="';
                $value = $this->resolveValue($context->find('itemid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '    data-value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-editlabel="';
                $value = $this->resolveValue($context->find('editlabel'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-type="';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-options="';
                $value = $this->resolveValue($context->find('options'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '        ';
                // 'linkeverything' inverted section
                $value = $context->find('linkeverything');
                if (empty($value)) {
                    
                    $value = $this->resolveValue($context->find('displayvalue'), $context);
                    $buffer .= $value;
                }
                $buffer .= '
';
                $buffer .= $indent . '        <a href="#" class="quickeditlink aalink" data-inplaceeditablelink="1" title="';
                $value = $this->resolveValue($context->find('edithint'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                // 'linkeverything' section
                $value = $context->find('linkeverything');
                $buffer .= $this->section5d531aa4621891223a040b8c852eb9de($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            <span class="quickediticon visibleifjs">
';
                $buffer .= $indent . '                ';
                // 'editicon' section
                $value = $context->find('editicon');
                $buffer .= $this->sectionCac6a6ab08930840c02d0c169eaeedba($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '</span>
';
                // 'js' section
                $value = $context->find('js');
                $buffer .= $this->sectionD47d1e0ac637346042b2f49951054846($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
