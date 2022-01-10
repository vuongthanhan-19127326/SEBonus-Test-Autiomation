<?php

class __Mustache_911b20b7a78ed06a82d475728f902278 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div';
        $buffer .= ' class="calendarwrapper"';
        $buffer .= ' data-context-id="';
        $value = $this->resolveValue($context->find('defaulteventcontext'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        // 'courseid' section
        $value = $context->find('courseid');
        $buffer .= $this->section4f3e547ac50707b30ffc2cec5e028045($context, $indent, $value);
        // 'categoryid' section
        $value = $context->find('categoryid');
        $buffer .= $this->sectionA00eaaaf78214a10bae0a4f10432dae0($context, $indent, $value);
        $buffer .= ' data-view="day"';
        $buffer .= ' data-year="';
        $value = $this->resolveValue($context->findDot('date.year'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-month="';
        $value = $this->resolveValue($context->findDot('date.mon'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-day="';
        $value = $this->resolveValue($context->findDot('date.mday'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-region="day"';
        $buffer .= ' data-new-event-timestamp="';
        $value = $this->resolveValue($context->find('neweventtimestamp'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core_calendar/day_navigation')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        if ($partial = $this->mustache->loadPartial('core/overlay_loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    ';
        if ($parent = $this->mustache->loadPartial('core_calendar/event_list')) {
            $context->pushBlockContext(array(
                'noeventsmessage' => array($this, 'block132702e080b03638c6f33122d0e86c71'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section4f3e547ac50707b30ffc2cec5e028045(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-courseid="{{courseid}}"';
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
                
                $buffer .= ' data-courseid="';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA00eaaaf78214a10bae0a4f10432dae0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-categoryid="{{categoryid}}"';
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
                
                $buffer .= ' data-categoryid="';
                $value = $this->resolveValue($context->find('categoryid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section124410f58067ba28fe860ae41233284a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' daywithnoevents, core_calendar ';
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
                
                $buffer .= ' daywithnoevents, core_calendar ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block132702e080b03638c6f33122d0e86c71($context)
    {
        $indent = $buffer = '';
        $buffer .= '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section124410f58067ba28fe860ae41233284a($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }
}
