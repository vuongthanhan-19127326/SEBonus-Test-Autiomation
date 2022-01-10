<?php

class __Mustache_0480c728e0d81e93c74816e0f9958585 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'url' section
        $value = $context->find('url');
        $buffer .= $this->section586f4bc1d4d9d949369b75063a8f631a($context, $indent, $value);

        return $buffer;
    }

    private function section90525f16a23dedf9397e74d94e4a720e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a href="{{url}}" class="{{linkclasses}} aalink stretched-link" onclick="{{{onclick}}}">
                            <span class="instancename">{{{instancename}}} {{{altname}}}</span>
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
                
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('linkclasses'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' aalink stretched-link" onclick="';
                $value = $this->resolveValue($context->find('onclick'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                            <span class="instancename">';
                $value = $this->resolveValue($context->find('instancename'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('altname'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section586f4bc1d4d9d949369b75063a8f631a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="activity-instance d-flex flex-column">
        <div class="activitytitle media {{textclasses}} modtype_{{modname}} position-relative align-self-start">
            <div class="activityiconcontainer {{purpose}} courseicon align-self-start mr-3">
                <img src="{{{icon}}}" class="activityicon " alt="{{{modname}}} icon">
            </div>
            <div class="media-body align-self-center">
                <div class="text-uppercase small">
                    {{{pluginname}}}
                </div>
                <div class="activityname">
                    {{#uservisible}}
                        <a href="{{url}}" class="{{linkclasses}} aalink stretched-link" onclick="{{{onclick}}}">
                            <span class="instancename">{{{instancename}}} {{{altname}}}</span>
                        </a>
                    {{/uservisible}}
                    {{^uservisible}}
                        <span class="instancename">
                            {{{instancename}}} {{{altname}}}
                        </span>
                    {{/uservisible}}
                </div>
            </div>
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
                
                $buffer .= $indent . '    <div class="activity-instance d-flex flex-column">
';
                $buffer .= $indent . '        <div class="activitytitle media ';
                $value = $this->resolveValue($context->find('textclasses'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' modtype_';
                $value = $this->resolveValue($context->find('modname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' position-relative align-self-start">
';
                $buffer .= $indent . '            <div class="activityiconcontainer ';
                $value = $this->resolveValue($context->find('purpose'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' courseicon align-self-start mr-3">
';
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= $value;
                $buffer .= '" class="activityicon " alt="';
                $value = $this->resolveValue($context->find('modname'), $context);
                $buffer .= $value;
                $buffer .= ' icon">
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="media-body align-self-center">
';
                $buffer .= $indent . '                <div class="text-uppercase small">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('pluginname'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="activityname">
';
                // 'uservisible' section
                $value = $context->find('uservisible');
                $buffer .= $this->section90525f16a23dedf9397e74d94e4a720e($context, $indent, $value);
                // 'uservisible' inverted section
                $value = $context->find('uservisible');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <span class="instancename">
';
                    $buffer .= $indent . '                            ';
                    $value = $this->resolveValue($context->find('instancename'), $context);
                    $buffer .= $value;
                    $buffer .= ' ';
                    $value = $this->resolveValue($context->find('altname'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                    $buffer .= $indent . '                        </span>
';
                }
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
