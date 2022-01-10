<?php

class __Mustache_591bd5227434816ffad7624883a7cddb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="competency-breakdown-report" data-courseid="';
        $value = $this->resolveValue($context->findDot('course.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-userid="';
        $value = $this->resolveValue($context->findDot('user.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-moduleid="';
        $value = $this->resolveValue($context->find('moduleid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '<div data-region="configurecoursecompetencies">
';
        // 'pushratingstouserplans' section
        $value = $context->find('pushratingstouserplans');
        $buffer .= $this->section846366204ac9e26c6b2adaa828560de7($context, $indent, $value);
        // 'pushratingstouserplans' inverted section
        $value = $context->find('pushratingstouserplans');
        if (empty($value)) {
            
            $buffer .= $indent . '    <p class="alert alert-info">
';
            $buffer .= $indent . '    ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section7728dc32f135d1e2924b0746299af745($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '    </p>
';
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="row">
';
        $buffer .= $indent . '<span class="col-md-6">
';
        $buffer .= $indent . '    <table class="table table-bordered">
';
        $buffer .= $indent . '        <summary class="accesshide">
';
        $buffer .= $indent . '            <p>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE798bd35d9faeeed0ac4c8da454e61c0($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '        </summary>
';
        $buffer .= $indent . '        <tr>
';
        $buffer .= $indent . '            <th scope="col">
';
        $buffer .= $indent . '                <span>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD8c4581909132f771aa529612142df2c($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </th>
';
        $buffer .= $indent . '            <th scope="col">
';
        $buffer .= $indent . '                <span>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionFb662ce31b548a030d6c044526ca2a49($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </th>
';
        $buffer .= $indent . '        </tr>
';
        // 'usercompetencies' section
        $value = $context->find('usercompetencies');
        $buffer .= $this->section82c539a1672eaebad93ebc0ac558d326($context, $indent, $value);
        $buffer .= $indent . '    </table>
';
        $buffer .= $indent . '</span>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionAb1aafdc22ea6782b3c037a844c391ed($context, $indent, $value);

        return $buffer;
    }

    private function sectionA0ed9b535ed171b00353f97e30f4d0eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'coursecompetencyratingsarepushedtouserplans, tool_lp';
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
                
                $buffer .= 'coursecompetencyratingsarepushedtouserplans, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section846366204ac9e26c6b2adaa828560de7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <p class="alert">
    {{#str}}coursecompetencyratingsarepushedtouserplans, tool_lp{{/str}}
    </p>
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
                
                $buffer .= $indent . '    <p class="alert">
';
                $buffer .= $indent . '    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA0ed9b535ed171b00353f97e30f4d0eb($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7728dc32f135d1e2924b0746299af745(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'coursecompetencyratingsarenotpushedtouserplans, tool_lp';
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
                
                $buffer .= 'coursecompetencyratingsarenotpushedtouserplans, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE798bd35d9faeeed0ac4c8da454e61c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'coursecompetencybreakdownsummary, report_competency';
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
                
                $buffer .= 'coursecompetencybreakdownsummary, report_competency';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8c4581909132f771aa529612142df2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'competency, report_competency';
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
                
                $buffer .= 'competency, report_competency';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb662ce31b548a030d6c044526ca2a49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rating, report_competency';
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
                
                $buffer .= 'rating, report_competency';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB621c1a305e950bfb4baa744fc8ed3f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <td>
                <a href="#" data-action="competency-dialogue" data-id="{{competency.id}}">
                    {{{competency.shortname}}} <em data-id="{{competency.id}}">{{competency.idnumber}}</em>
                </a>
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
                
                $buffer .= $indent . '            <td>
';
                $buffer .= $indent . '                <a href="#" data-action="competency-dialogue" data-id="';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('competency.shortname'), $context);
                $buffer .= $value;
                $buffer .= ' <em data-id="';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->findDot('competency.idnumber'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</em>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e308a5c34cc70ca2cb115321eeb44e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'alert-success';
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
                
                $buffer .= 'alert-success';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section213b0b8043d1f69c2b2bf748562b79e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <td class="alert {{#proficiency}}alert-success{{/proficiency}}"
                data-user-competency="true"
                data-userid="{{user.id}}"
                data-competencyid="{{competencyid}}"
                data-courseid="{{course.id}}">
                {{> report_competency/user_competency_summary}}
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
                
                $buffer .= $indent . '            <td class="alert ';
                // 'proficiency' section
                $value = $context->find('proficiency');
                $buffer .= $this->section2e308a5c34cc70ca2cb115321eeb44e8($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                data-user-competency="true"
';
                $buffer .= $indent . '                data-userid="';
                $value = $this->resolveValue($context->findDot('user.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                data-competencyid="';
                $value = $this->resolveValue($context->find('competencyid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                data-courseid="';
                $value = $this->resolveValue($context->findDot('course.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                if ($partial = $this->mustache->loadPartial('report_competency/user_competency_summary')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82c539a1672eaebad93ebc0ac558d326(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <tr>
            {{#competency}}
            <td>
                <a href="#" data-action="competency-dialogue" data-id="{{competency.id}}">
                    {{{competency.shortname}}} <em data-id="{{competency.id}}">{{competency.idnumber}}</em>
                </a>
            </td>
            {{/competency}}
            {{#usercompetencycourse}}
            <td class="alert {{#proficiency}}alert-success{{/proficiency}}"
                data-user-competency="true"
                data-userid="{{user.id}}"
                data-competencyid="{{competencyid}}"
                data-courseid="{{course.id}}">
                {{> report_competency/user_competency_summary}}
            </td>
            {{/usercompetencycourse}}
        </tr>
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
                
                $buffer .= $indent . '        <tr>
';
                // 'competency' section
                $value = $context->find('competency');
                $buffer .= $this->sectionB621c1a305e950bfb4baa744fc8ed3f5($context, $indent, $value);
                // 'usercompetencycourse' section
                $value = $context->find('usercompetencycourse');
                $buffer .= $this->section213b0b8043d1f69c2b2bf748562b79e1($context, $indent, $value);
                $buffer .= $indent . '        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb1aafdc22ea6782b3c037a844c391ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'tool_lp/competencydialogue\'], function(Compdialogue) {
    Compdialogue.init();
});
require([\'report_competency/grading_popup\'], function(Popup) {
    (new Popup(\'[data-region=competency-breakdown-report]\', \'[data-user-competency=true]\'));
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
                
                $buffer .= $indent . 'require([\'tool_lp/competencydialogue\'], function(Compdialogue) {
';
                $buffer .= $indent . '    Compdialogue.init();
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . 'require([\'report_competency/grading_popup\'], function(Popup) {
';
                $buffer .= $indent . '    (new Popup(\'[data-region=competency-breakdown-report]\', \'[data-user-competency=true]\'));
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
