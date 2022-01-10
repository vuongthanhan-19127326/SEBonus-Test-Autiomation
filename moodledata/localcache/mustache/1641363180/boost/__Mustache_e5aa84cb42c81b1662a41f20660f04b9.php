<?php

class __Mustache_e5aa84cb42c81b1662a41f20660f04b9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-course-format">
';
        $buffer .= $indent . '    <h2 class="accesshide">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= $value;
        $buffer .= '</h2>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('completionhelp'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    <ul class="';
        $value = $this->resolveValue($context->find('format'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-for="course_sectionlist">
';
        // 'initialsection' section
        $value = $context->find('initialsection');
        $buffer .= $this->section05f0d6246cfc44de731c412651c5ede0($context, $indent, $value);
        // 'sections' section
        $value = $context->find('sections');
        $buffer .= $this->section05f0d6246cfc44de731c412651c5ede0($context, $indent, $value);
        $buffer .= $indent . '    </ul>
';
        // 'hasnavigation' section
        $value = $context->find('hasnavigation');
        $buffer .= $this->sectionAd0bd1ef57ff1e91a0355ec7706cada2($context, $indent, $value);
        $buffer .= $indent . '    ';
        // 'numsections' section
        $value = $context->find('numsections');
        $buffer .= $this->sectionE3ab40fb6564dfd3f25768b68b0c80b8($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section658d9a99a3fddbc6159734309bfdedf6($context, $indent, $value);

        return $buffer;
    }

    private function section05f0d6246cfc44de731c412651c5ede0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> core_courseformat/local/content/section }}
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
                
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd77efb5a1e100a6b3c28e6b232f37c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> core_courseformat/local/content/sectionnavigation }} ';
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
                
                $buffer .= ' ';
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/sectionnavigation')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA00989a53789ae202f867a0ca2b3755f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> core_courseformat/local/content/sectionselector }} ';
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
                
                $buffer .= ' ';
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/sectionselector')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd0bd1ef57ff1e91a0355ec7706cada2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="single-section">
        {{#sectionnavigation}} {{> core_courseformat/local/content/sectionnavigation }} {{/sectionnavigation}}
        <ul class="{{format}}">
        {{#singlesection}}
            {{> core_courseformat/local/content/section }}
        {{/singlesection}}
        </ul>
        {{#sectionselector}} {{> core_courseformat/local/content/sectionselector }} {{/sectionselector}}
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
                
                $buffer .= $indent . '    <div class="single-section">
';
                $buffer .= $indent . '        ';
                // 'sectionnavigation' section
                $value = $context->find('sectionnavigation');
                $buffer .= $this->sectionFd77efb5a1e100a6b3c28e6b232f37c9($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        <ul class="';
                $value = $this->resolveValue($context->find('format'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'singlesection' section
                $value = $context->find('singlesection');
                $buffer .= $this->section05f0d6246cfc44de731c412651c5ede0($context, $indent, $value);
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '        ';
                // 'sectionselector' section
                $value = $context->find('sectionselector');
                $buffer .= $this->sectionA00989a53789ae202f867a0ca2b3755f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3ab40fb6564dfd3f25768b68b0c80b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> core_courseformat/local/content/addsection}} ';
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
                
                $buffer .= ' ';
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/addsection')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section658d9a99a3fddbc6159734309bfdedf6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core_courseformat/local/content\'], function(component) {
    component.init(\'{{uniqid}}-course-format\', {}, {{sectionreturn}});
});
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
                
                $buffer .= $indent . 'require([\'core_courseformat/local/content\'], function(component) {
';
                $buffer .= $indent . '    component.init(\'';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-course-format\', {}, ';
                $value = $this->resolveValue($context->find('sectionreturn'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
