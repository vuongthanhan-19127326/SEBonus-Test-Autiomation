<?php

class __Mustache_0f04376ad5c16f80a2a6c02ed36bdaa2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_message/message_drawer_view_overview_section')) {
            $context->pushBlockContext(array(
                'region' => array($this, 'block0c83240d17276ef449a0f70a9941867a'),
                'title' => array($this, 'block4cb9ef960671bd952a7134d55ccfd7f4'),
                'placeholder' => array($this, 'blockE9b23ea6ffe7cff2e099ad2c26b6072a'),
                'emptymessage' => array($this, 'block3cf6fb2e1032817a4c75f651d6f46680'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionF7558f374c4ffa9cd2c6759ea660f7e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' favourites ';
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
                
                $buffer .= ' favourites ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section916501edc8941102f320cc739ac0bc50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nofavourites, core_message ';
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
                
                $buffer .= ' nofavourites, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block0c83240d17276ef449a0f70a9941867a($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'view-overview-favourites';
    
        return $buffer;
    }

    public function block4cb9ef960671bd952a7134d55ccfd7f4($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionF7558f374c4ffa9cd2c6759ea660f7e8($context, $indent, $value);
    
        return $buffer;
    }

    public function blockE9b23ea6ffe7cff2e099ad2c26b6072a($context)
    {
        $indent = $buffer = '';
        $buffer .= '        <div class="text-center py-2">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';
    
        return $buffer;
    }

    public function block3cf6fb2e1032817a4c75f651d6f46680($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <p class="text-muted mt-2">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section916501edc8941102f320cc739ac0bc50($context, $indent, $value);
        $buffer .= '</p>
';
    
        return $buffer;
    }
}
