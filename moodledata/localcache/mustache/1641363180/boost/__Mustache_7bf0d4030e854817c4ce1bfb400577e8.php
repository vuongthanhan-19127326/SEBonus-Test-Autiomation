<?php

class __Mustache_7bf0d4030e854817c4ce1bfb400577e8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<tr class="preference-row" data-region="preference-row" data-preference-key="';
        $value = $this->resolveValue($context->find('preferencekey'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <td class="preference-name">';
        $value = $this->resolveValue($context->find('displayname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</td>
';
        // 'processors' section
        $value = $context->find('processors');
        $buffer .= $this->section62770be624fed28706d894bc3acb1edb($context, $indent, $value);
        $buffer .= $indent . '</tr>
';

        return $buffer;
    }

    private function section250b1aed71b494f11eb4d8c66ccfb175(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="dimmed_text">{{lockedmessage}}</div>
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
                
                $buffer .= $indent . '                <div class="dimmed_text">';
                $value = $this->resolveValue($context->find('lockedmessage'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c413b3a3ae51ef2b1059c0510232480(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' disabled, admin ';
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
                
                $buffer .= ' disabled, admin ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51d7c9c652ced0161cb587bacd669266(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked';
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
                
                $buffer .= 'checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC87198b06c7ce18b3aeed72afb34afb9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disabled';
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
                
                $buffer .= 'disabled';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section574df47556eb0075bdfd6504d8e44d75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{< core/hover_tooltip }}
                                        {{$anchor}}
                                            <label class="custom-control custom-switch"
                                                title="{{displayname}}"
                                                data-state="{{name}}">
                                                <span class="accesshide">{{displayname}}</span>
                                                <input type="checkbox"
                                                    class="custom-control-input"
                                                    {{#checked}}checked{{/checked}}
                                                    {{#disableall}}disabled{{/disableall}} />
                                                <span class="custom-control-label d-block"></span>
                                            </label>
                                        {{/anchor}}
                                        {{$tooltip}}{{displayname}}{{/tooltip}}
                                    {{/ core/hover_tooltip }}
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
                
                $buffer .= $indent . '                                    ';
                if ($parent = $this->mustache->loadPartial('core/hover_tooltip')) {
                    $context->pushBlockContext(array(
                        'anchor' => array($this, 'block2110152cbf9f5f20577e4760996921af'),
                        'tooltip' => array($this, 'blockB331cd3ea4cca41d8fd61c5bb4eb6864'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section62770be624fed28706d894bc3acb1edb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <td {{^userconfigured}}class="disabled"{{/userconfigured}} data-processor-name="{{name}}">
            {{#locked}}
                <div class="dimmed_text">{{lockedmessage}}</div>
            {{/locked}}
            {{^locked}}
                <div class="disabled-message">{{#str}} disabled, admin {{/str}}</div>
                <form>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6">
                                {{#loggedin}}
                                    {{< core/hover_tooltip }}
                                        {{$anchor}}
                                            <label class="custom-control custom-switch"
                                                title="{{displayname}}"
                                                data-state="{{name}}">
                                                <span class="accesshide">{{displayname}}</span>
                                                <input type="checkbox"
                                                    class="custom-control-input"
                                                    {{#checked}}checked{{/checked}}
                                                    {{#disableall}}disabled{{/disableall}} />
                                                <span class="custom-control-label d-block"></span>
                                            </label>
                                        {{/anchor}}
                                        {{$tooltip}}{{displayname}}{{/tooltip}}
                                    {{/ core/hover_tooltip }}
                                {{/loggedin}}
                            </div>
                            <div class="col-6">
                                {{#loggedoff}}
                                    {{< core/hover_tooltip }}
                                        {{$anchor}}
                                            <label class="custom-control custom-switch"
                                                title="{{displayname}}"
                                                data-state="{{name}}">
                                                <span class="accesshide">{{displayname}}</span>
                                                <input type="checkbox"
                                                    class="custom-control-input"
                                                    {{#checked}}checked{{/checked}}
                                                    {{#disableall}}disabled{{/disableall}} />
                                                <span class="custom-control-label d-block"></span>
                                            </label>
                                        {{/anchor}}
                                        {{$tooltip}}{{displayname}}{{/tooltip}}
                                    {{/ core/hover_tooltip }}
                                {{/loggedoff}}
                            </div>
                        </div>
                    </div>
                </form>
            {{/locked}}
        </td>
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
                
                $buffer .= $indent . '    <td ';
                // 'userconfigured' inverted section
                $value = $context->find('userconfigured');
                if (empty($value)) {
                    
                    $buffer .= 'class="disabled"';
                }
                $buffer .= ' data-processor-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'locked' section
                $value = $context->find('locked');
                $buffer .= $this->section250b1aed71b494f11eb4d8c66ccfb175($context, $indent, $value);
                // 'locked' inverted section
                $value = $context->find('locked');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <div class="disabled-message">';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section3c413b3a3ae51ef2b1059c0510232480($context, $indent, $value);
                    $buffer .= '</div>
';
                    $buffer .= $indent . '                <form>
';
                    $buffer .= $indent . '                    <div class="container-fluid">
';
                    $buffer .= $indent . '                        <div class="row">
';
                    $buffer .= $indent . '                            <div class="col-6">
';
                    // 'loggedin' section
                    $value = $context->find('loggedin');
                    $buffer .= $this->section574df47556eb0075bdfd6504d8e44d75($context, $indent, $value);
                    $buffer .= '                            </div>
';
                    $buffer .= $indent . '                            <div class="col-6">
';
                    // 'loggedoff' section
                    $value = $context->find('loggedoff');
                    $buffer .= $this->section574df47556eb0075bdfd6504d8e44d75($context, $indent, $value);
                    $buffer .= $indent . '                            </div>
';
                    $buffer .= $indent . '                        </div>
';
                    $buffer .= $indent . '                    </div>
';
                    $buffer .= $indent . '                </form>
';
                }
                $buffer .= $indent . '        </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block2110152cbf9f5f20577e4760996921af($context)
    {
        $indent = $buffer = '';
        $buffer .= '                                            <label class="custom-control custom-switch"
';
        $buffer .= $indent . '                                                title="';
        $value = $this->resolveValue($context->find('displayname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                                                data-state="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                                                <span class="accesshide">';
        $value = $this->resolveValue($context->find('displayname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                                                <input type="checkbox"
';
        $buffer .= $indent . '                                                    class="custom-control-input"
';
        $buffer .= $indent . '                                                    ';
        // 'checked' section
        $value = $context->find('checked');
        $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                                    ';
        // 'disableall' section
        $value = $context->find('disableall');
        $buffer .= $this->sectionC87198b06c7ce18b3aeed72afb34afb9($context, $indent, $value);
        $buffer .= ' />
';
        $buffer .= $indent . '                                                <span class="custom-control-label d-block"></span>
';
        $buffer .= $indent . '                                            </label>
';
    
        return $buffer;
    }

    public function blockB331cd3ea4cca41d8fd61c5bb4eb6864($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('displayname'), $context);
        $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);
    
        return $buffer;
    }
}
