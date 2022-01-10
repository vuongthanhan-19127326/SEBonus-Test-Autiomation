<?php

class __Mustache_0ee60f3cfac4129b0b30e1054fb82430 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="d-flex justify-content-between">
';
        $buffer .= $indent . '    <form data-region="grading-actions-form" class="hide flex-grow-1 align-self-center">
';
        $buffer .= $indent . '        <label>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE4bbab7d2adabb93d1d7bc2bc143a83a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '               <input type="checkbox" name="sendstudentnotifications"
';
        $buffer .= $indent . '                      ';
        // 'defaultsendnotifications' section
        $value = $context->find('defaultsendnotifications');
        $buffer .= $this->sectionE6c044fe8710d3502dd5cb9686c32f3f($context, $indent, $value);
        $buffer .= ' />
';
        $buffer .= $indent . '        </label>
';
        // 'helpicon' section
        $value = $context->find('helpicon');
        $buffer .= $this->section36f4236b4cd53c7cc06aaed2f8886dcd($context, $indent, $value);
        $buffer .= $indent . '        <button type="submit" class="btn btn-primary" name="savechanges">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionCc896fb1429559fad42f2607525c3e3c($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '        <button type="submit" class="btn btn-primary" name="saveandshownext">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section788619b85d712ca0138670b049be0fdc($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '        <button type="submit" class="btn btn-secondary" name="resetbutton">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section65bdb401750b97914f5899115f865e4d($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '    </form>
';
        // 'showreview' section
        $value = $context->find('showreview');
        $buffer .= $this->section34cb69f52c0b3442ffef47c5fca7cf1d($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section2c4c4236766022056ffb68d257e30435($context, $indent, $value);

        return $buffer;
    }

    private function sectionE4bbab7d2adabb93d1d7bc2bc143a83a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sendstudentnotifications, mod_assign';
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
                
                $buffer .= 'sendstudentnotifications, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6c044fe8710d3502dd5cb9686c32f3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked="checked"';
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
                
                $buffer .= 'checked="checked"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36f4236b4cd53c7cc06aaed2f8886dcd(Mustache_Context $context, $indent, $value)
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
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc896fb1429559fad42f2607525c3e3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'savechanges';
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
                
                $buffer .= 'savechanges';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section788619b85d712ca0138670b049be0fdc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'saveandnext';
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
                
                $buffer .= 'saveandnext';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section65bdb401750b97914f5899115f865e4d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'reset';
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
                
                $buffer .= 'reset';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section543bd84e7b00471a306f2bd9b2bf65b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapsereviewpanel, mod_assign ';
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
                
                $buffer .= ' collapsereviewpanel, mod_assign ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1bec7edb3fe51fe42c1e677e3210d7bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' layout-expand-right, mod_assign ';
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
                
                $buffer .= ' layout-expand-right, mod_assign ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD36d2e48c9ce6870434cce1575ebe4d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' defaultlayout, mod_assign ';
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
                
                $buffer .= ' defaultlayout, mod_assign ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa5e1af0d29c5efdbf951068db21b49e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' layout-default, mod_assign ';
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
                
                $buffer .= ' layout-default, mod_assign ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6cd38f1729eb8cb47dd005f87525eb67(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapsegradepanel, mod_assign ';
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
                
                $buffer .= ' collapsegradepanel, mod_assign ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section209825116afe3bb31d58551fbfd1ec1a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' layout-expand-left, mod_assign ';
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
                
                $buffer .= ' layout-expand-left, mod_assign ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section34cb69f52c0b3442ffef47c5fca7cf1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="btn-toolbar collapse-buttons">
            <div class="btn-group">
                <button type="button" class="btn btn-secondary collapse-review-panel" aria-label="{{#str}} collapsereviewpanel, mod_assign {{/str}}" title="{{#str}} collapsereviewpanel, mod_assign {{/str}}">
                    {{#pix}} layout-expand-right, mod_assign {{/pix}}
                </button>
                <button type="button" class="btn btn-secondary collapse-none active" aria-label="{{#str}} defaultlayout, mod_assign {{/str}}" title="{{#str}} defaultlayout, mod_assign {{/str}}">
                    {{#pix}} layout-default, mod_assign {{/pix}}
                </button>
                <button type="button" class="btn btn-secondary collapse-grade-panel" aria-label="{{#str}} collapsegradepanel, mod_assign {{/str}}" title="{{#str}} collapsegradepanel, mod_assign {{/str}}">
                    {{#pix}} layout-expand-left, mod_assign {{/pix}}
                </button>
            </div>
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
                
                $buffer .= $indent . '        <div class="btn-toolbar collapse-buttons">
';
                $buffer .= $indent . '            <div class="btn-group">
';
                $buffer .= $indent . '                <button type="button" class="btn btn-secondary collapse-review-panel" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section543bd84e7b00471a306f2bd9b2bf65b1($context, $indent, $value);
                $buffer .= '" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section543bd84e7b00471a306f2bd9b2bf65b1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section1bec7edb3fe51fe42c1e677e3210d7bd($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '                <button type="button" class="btn btn-secondary collapse-none active" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD36d2e48c9ce6870434cce1575ebe4d7($context, $indent, $value);
                $buffer .= '" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD36d2e48c9ce6870434cce1575ebe4d7($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionAa5e1af0d29c5efdbf951068db21b49e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '                <button type="button" class="btn btn-secondary collapse-grade-panel" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6cd38f1729eb8cb47dd005f87525eb67($context, $indent, $value);
                $buffer .= '" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6cd38f1729eb8cb47dd005f87525eb67($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section209825116afe3bb31d58551fbfd1ec1a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c4c4236766022056ffb68d257e30435(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'mod_assign/grading_actions\'], function(GradingActions) {
    new GradingActions(\'[data-region="grade-actions"]\');
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
                
                $buffer .= $indent . 'require([\'mod_assign/grading_actions\'], function(GradingActions) {
';
                $buffer .= $indent . '    new GradingActions(\'[data-region="grade-actions"]\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
