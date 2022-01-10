<?php

class __Mustache_92ea05c32e8554485b6b1cfa87558013 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="float-right border p-2 mb-2">
';
        $buffer .= $indent . '<p>';
        $value = $this->resolveValue($context->find('groupselector'), $context);
        $buffer .= $value;
        $buffer .= '</p>
';
        $buffer .= $indent . '<form class="user-competency-course-navigation">
';
        $buffer .= $indent . '<input type="hidden" name="user" value="';
        $value = $this->resolveValue($context->find('userid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"/>
';
        $buffer .= $indent . '<input type="hidden" name="id" value="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"/>
';
        $buffer .= $indent . '<input type="hidden" name="mod" value="';
        $value = $this->resolveValue($context->find('moduleid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"/>
';
        // 'hasusers' section
        $value = $context->find('hasusers');
        $buffer .= $this->section90502f39913b353176b3fcb31eb679ec($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hasmodules' section
        $value = $context->find('hasmodules');
        $buffer .= $this->sectionAe83013ea0b7d38b870c63a31fe84f3d($context, $indent, $value);
        $buffer .= $indent . '</form>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionB3096b5f21f94cead54079a63337e555($context, $indent, $value);

        return $buffer;
    }

    private function section849fc9ab64bd7f0299a2f9a11a92657f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'jumptouser, tool_lp';
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
                
                $buffer .= 'jumptouser, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC877874b20aed109ed5be9bdc0ef9c49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected="selected"';
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
                
                $buffer .= 'selected="selected"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6fde2fb59ab605de32007b6b206123e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<option value="{{id}}" {{#selected}}selected="selected"{{/selected}}>{{fullname}}</option>
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
                
                $buffer .= $indent . '<option value="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'selected' section
                $value = $context->find('selected');
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90502f39913b353176b3fcb31eb679ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<span>
<label for="user-nav-{{uniqid}}" class="accesshide">{{#str}}jumptouser, tool_lp{{/str}}</label>
<select id="user-nav-{{uniqid}}">
{{#users}}
<option value="{{id}}" {{#selected}}selected="selected"{{/selected}}>{{fullname}}</option>
{{/users}}
</select>
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
                
                $buffer .= $indent . '<span>
';
                $buffer .= $indent . '<label for="user-nav-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="accesshide">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section849fc9ab64bd7f0299a2f9a11a92657f($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '<select id="user-nav-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'users' section
                $value = $context->find('users');
                $buffer .= $this->sectionF6fde2fb59ab605de32007b6b206123e($context, $indent, $value);
                $buffer .= $indent . '</select>
';
                $buffer .= $indent . '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0cd16079f653f91505cf229e72912fe4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filterbyactivity, tool_lp';
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
                
                $buffer .= 'filterbyactivity, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a4a96f8808adbdf9bcf1bdb4ee2b2ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<option value="{{id}}" {{#selected}}selected="selected"{{/selected}}>{{name}}</option>
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
                
                $buffer .= $indent . '<option value="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'selected' section
                $value = $context->find('selected');
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe83013ea0b7d38b870c63a31fe84f3d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<span>
<label for="module-nav-{{uniqid}}" class="accesshide">{{#str}}filterbyactivity, tool_lp{{/str}}</label>
<select id="module-nav-{{uniqid}}">
{{#modules}}
<option value="{{id}}" {{#selected}}selected="selected"{{/selected}}>{{name}}</option>
{{/modules}}
</select>
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
                
                $buffer .= $indent . '<span>
';
                $buffer .= $indent . '<label for="module-nav-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="accesshide">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0cd16079f653f91505cf229e72912fe4($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '<select id="module-nav-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'modules' section
                $value = $context->find('modules');
                $buffer .= $this->section1a4a96f8808adbdf9bcf1bdb4ee2b2ec($context, $indent, $value);
                $buffer .= $indent . '</select>
';
                $buffer .= $indent . '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf2536acd478d396fc92a529033db61b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{# str }}jumptouser, tool_lp{{/ str }}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section849fc9ab64bd7f0299a2f9a11a92657f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c80082b3fbc9bee8359fcb995f53b5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    autocomplete.enhance(\'#user-nav-{{uniqid}}\', false, false, {{# quote }}{{# str }}jumptouser, tool_lp{{/ str }}{{/ quote }});
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
                
                $buffer .= $indent . '    autocomplete.enhance(\'#user-nav-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', false, false, ';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->sectionDf2536acd478d396fc92a529033db61b($context, $indent, $value);
                $buffer .= ');
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe4f27ac70ec58f9ae9eee2c28213dd2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{# str }}filterbyactivity, tool_lp{{/ str }}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0cd16079f653f91505cf229e72912fe4($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd006758845fa96f8923358efa7219f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    autocomplete.enhance(\'#module-nav-{{uniqid}}\', false, false, {{# quote }}{{# str }}filterbyactivity, tool_lp{{/ str }}{{/ quote }});
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
                
                $buffer .= $indent . '    autocomplete.enhance(\'#module-nav-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', false, false, ';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->sectionEe4f27ac70ec58f9ae9eee2c28213dd2($context, $indent, $value);
                $buffer .= ');
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3096b5f21f94cead54079a63337e555(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core/form-autocomplete\', \'report_competency/user_course_navigation\'], function(autocomplete, nav) {
    (new nav(\'#user-nav-{{uniqid}}\', \'#module-nav-{{uniqid}}\', \'{{baseurl}}\', {{userid}}, {{courseid}}, {{moduleid}}));
{{#hasusers}}
    autocomplete.enhance(\'#user-nav-{{uniqid}}\', false, false, {{# quote }}{{# str }}jumptouser, tool_lp{{/ str }}{{/ quote }});
{{/hasusers}}
{{#hasmodules}}
    autocomplete.enhance(\'#module-nav-{{uniqid}}\', false, false, {{# quote }}{{# str }}filterbyactivity, tool_lp{{/ str }}{{/ quote }});
{{/hasmodules}}
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
                
                $buffer .= $indent . 'require([\'core/form-autocomplete\', \'report_competency/user_course_navigation\'], function(autocomplete, nav) {
';
                $buffer .= $indent . '    (new nav(\'#user-nav-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', \'#module-nav-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', \'';
                $value = $this->resolveValue($context->find('baseurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', ';
                $value = $this->resolveValue($context->find('userid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('moduleid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '));
';
                // 'hasusers' section
                $value = $context->find('hasusers');
                $buffer .= $this->section1c80082b3fbc9bee8359fcb995f53b5c($context, $indent, $value);
                // 'hasmodules' section
                $value = $context->find('hasmodules');
                $buffer .= $this->sectionFd006758845fa96f8923358efa7219f9($context, $indent, $value);
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
