<?php

class __Mustache_1e933759389dbdb3003688958fb2400c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form id="responseform" method="post" action="';
        $value = $this->resolveValue($context->find('actionurl'), $context);
        $buffer .= $value;
        $buffer .= '" enctype="multipart/form-data" autocomplete="off">
';
        $buffer .= $indent . '    <div>
';
        $buffer .= $indent . '        <input type="hidden" name="sesskey" value="';
        $value = $this->resolveValue($context->find('session'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <input type="hidden" name="slots" value="';
        $value = $this->resolveValue($context->find('slot'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <input type="hidden" name="scrollpos" value="" id="scrollpos">
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('question'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    <div id="previewcontrols" class="controls input-group">
';
        $buffer .= $indent . '        <input type="submit" name="restart" value="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section8641f130d18b69a6ea7dcb9677655f15($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary mr-1 mb-1" id="id_restart_question_preview" ';
        $value = $this->resolveValue($context->find('restartdisabled'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        $buffer .= $indent . '        <input type="submit" name="save" value="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section57c048e192657f426e86cefa8fcd08c9($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary mr-1 mb-1" id="id_save_question_preview" ';
        $value = $this->resolveValue($context->find('finishdisabled'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        $buffer .= $indent . '        <input type="submit" name="fill" value="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionF03f74e9fff013753c944827c0cb6ac5($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary mr-1 mb-1" ';
        $value = $this->resolveValue($context->find('filldisabled'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        $buffer .= $indent . '        <input type="submit" name="finish" value="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section7f65f19f1b1ba96fc0ed86f3ea9ce2e7($context, $indent, $value);
        $buffer .= '" class="btn btn-secondary mr-1 mb-1" id="id_finish_question_preview" ';
        $value = $this->resolveValue($context->find('finishdisabled'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        // 'redirect' inverted section
        $value = $context->find('redirect');
        if (empty($value)) {
            
            $buffer .= $indent . '            <input type="button" name="close" value="';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section93ff76985c4533d7046185baf8a48aa3($context, $indent, $value);
            $buffer .= '" class="btn btn-secondary mr-1 mb-1" id="close-previewquestion-page">
';
        }
        // 'redirect' section
        $value = $context->find('redirect');
        $buffer .= $this->sectionFf2d34e4eed4801ec8536374aee6989c($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</form>
';
        $value = $this->resolveValue($context->find('techinfo'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $value = $this->resolveValue($context->find('exporttoxml'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        // 'comments' section
        $value = $context->find('comments');
        $buffer .= $this->section23c3c655b44fcd70f9744e5a2a16ce84($context, $indent, $value);
        // 'comments' inverted section
        $value = $context->find('comments');
        if (empty($value)) {
            
            $buffer .= $indent . '    ';
            $value = $this->resolveValue($context->find('options'), $context);
            $buffer .= $value;
            $buffer .= '
';
        }
        // 'extrapreviewelements' section
        $value = $context->find('extrapreviewelements');
        $buffer .= $this->section9e7b567766417dcb65c40111ae087eb1($context, $indent, $value);

        return $buffer;
    }

    private function section8641f130d18b69a6ea7dcb9677655f15(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' restart, question';
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
                
                $buffer .= ' restart, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57c048e192657f426e86cefa8fcd08c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' save, question';
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
                
                $buffer .= ' save, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF03f74e9fff013753c944827c0cb6ac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' fillincorrect, question';
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
                
                $buffer .= ' fillincorrect, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f65f19f1b1ba96fc0ed86f3ea9ce2e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' submitandfinish, question';
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
                
                $buffer .= ' submitandfinish, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93ff76985c4533d7046185baf8a48aa3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' closepreview, question';
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
                
                $buffer .= ' closepreview, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf2d34e4eed4801ec8536374aee6989c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{redirecturl}}}" class="btn btn-secondary mr-1 mb-1" role="button">{{#str}} closepreview, question{{/str}}</a>
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
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('redirecturl'), $context);
                $buffer .= $value;
                $buffer .= '" class="btn btn-secondary mr-1 mb-1" role="button">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section93ff76985c4533d7046185baf8a48aa3($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23c3c655b44fcd70f9744e5a2a16ce84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="row">
        <div class="col-6 text-left">
            {{{options}}}
        </div>
        <div class="col-6 question-comment-view">
            {{{comments}}}
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
                
                $buffer .= $indent . '    <div class="row">
';
                $buffer .= $indent . '        <div class="col-6 text-left">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('options'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="col-6 question-comment-view">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('comments'), $context);
                $buffer .= $value;
                $buffer .= '
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

    private function section9e7b567766417dcb65c40111ae087eb1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{extrapreviewelements}}}
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
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('extrapreviewelements'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
