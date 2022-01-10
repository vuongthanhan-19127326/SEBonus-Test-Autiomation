<?php

class __Mustache_40bede3809b293c7a2ad6a42cb0809da extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="notification-area" data-region="notification-area" data-user-id="';
        $value = $this->resolveValue($context->find('userid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="control-area" data-region="control-area">
';
        $buffer .= $indent . '        <div class="header"></div>
';
        $buffer .= $indent . '        <div class="content" data-region="content"></div>
';
        $buffer .= $indent . '        <div class="empty-text">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section7fd8a95ce9a614b8c5bab7e83009f0ca($context, $indent, $value);
        $buffer .= '</div>
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="content-area" data-region="content-area">
';
        $buffer .= $indent . '        <div class="toggle-mode">
';
        $buffer .= $indent . '            <button class="btn btn-link" data-action="toggle-mode">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionEe9e446c9436ef6762b83feef2c4ca70($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="header" data-region="header"></div>
';
        $buffer .= $indent . '        <div class="content" data-region="content"></div>
';
        $buffer .= $indent . '        <div class="empty-text">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section39c9bcea04fc5e1a756efc7b11c6e831($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '        <div class="footer" data-region="footer"></div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionCb90300b7b50381c2da940c359ec8ef3($context, $indent, $value);

        return $buffer;
    }

    private function section7fd8a95ce9a614b8c5bab7e83009f0ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nonotifications, message ';
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
                
                $buffer .= ' nonotifications, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe9e446c9436ef6762b83feef2c4ca70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' back ';
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
                
                $buffer .= ' back ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39c9bcea04fc5e1a756efc7b11c6e831(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' selectnotificationtoview, message ';
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
                
                $buffer .= ' selectnotificationtoview, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE7940dfefe5f707875ed228ae1c06151(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    controlArea.setOffset({{.}});
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
                
                $buffer .= $indent . '    controlArea.setOffset(';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ');
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88fc8fa763e9d0245d75502fe162405b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    controlArea.setLimit({{.}});
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
                
                $buffer .= $indent . '    controlArea.setLimit(';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ');
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2fb34967d81d367a4df0cedcab903f1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    controlArea.loadMoreNotifications().done(function() {
        controlArea.showNotification({{.}});
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
                
                $buffer .= $indent . '    controlArea.loadMoreNotifications().done(function() {
';
                $buffer .= $indent . '        controlArea.showNotification(';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb90300b7b50381c2da940c359ec8ef3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'message_popup/notification_area_control_area\', \'message_popup/notification_area_content_area\'],
    function($, ControlArea, ContentArea) {

    var userId = {{userid}};
    var controlArea = new ControlArea($(\'[data-region="control-area"]\'), userId);
    {{#offset}}
    controlArea.setOffset({{.}});
    {{/offset}}
    {{#limit}}
    controlArea.setLimit({{.}});
    {{/limit}}
    {{#notificationid}}
    controlArea.loadMoreNotifications().done(function() {
        controlArea.showNotification({{.}});
    });
    {{/notificationid}}
    {{^notificationid}}
    controlArea.loadMoreNotifications();
    {{/notificationid}}

    new ContentArea($(\'[data-region="content-area"]\'), userId);
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
                
                $buffer .= $indent . 'require([\'jquery\', \'message_popup/notification_area_control_area\', \'message_popup/notification_area_content_area\'],
';
                $buffer .= $indent . '    function($, ControlArea, ContentArea) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    var userId = ';
                $value = $this->resolveValue($context->find('userid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ';
';
                $buffer .= $indent . '    var controlArea = new ControlArea($(\'[data-region="control-area"]\'), userId);
';
                // 'offset' section
                $value = $context->find('offset');
                $buffer .= $this->sectionE7940dfefe5f707875ed228ae1c06151($context, $indent, $value);
                // 'limit' section
                $value = $context->find('limit');
                $buffer .= $this->section88fc8fa763e9d0245d75502fe162405b($context, $indent, $value);
                // 'notificationid' section
                $value = $context->find('notificationid');
                $buffer .= $this->section2fb34967d81d367a4df0cedcab903f1d($context, $indent, $value);
                // 'notificationid' inverted section
                $value = $context->find('notificationid');
                if (empty($value)) {
                    
                    $buffer .= $indent . '    controlArea.loadMoreNotifications();
';
                }
                $buffer .= $indent . '
';
                $buffer .= $indent . '    new ContentArea($(\'[data-region="content-area"]\'), userId);
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
