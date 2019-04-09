<?php

class __Mustache_759ae0b41e5e8b5cfae65e2c2d8660e0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- Begin fieldset generated from question_container template. -->
';
        $buffer .= $indent . '<fieldset id="qn-';
        $value = $this->resolveValue($context->findDot('fieldset.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="';
        $value = $this->resolveValue($context->findDot('fieldset.class'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('dependencylist'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'qnum' section
        $value = $context->find('qnum');
        $buffer .= $this->sectionE5965089ff1cbdf635795989d4b29e7c($context, $indent, $value);
        $buffer .= $indent . '    <div class="qn-content">
';
        $buffer .= $indent . '        <div class="qn-question ';
        $value = $this->resolveValue($context->find('skippedclass'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        // 'label' section
        $value = $context->find('label');
        $buffer .= $this->section694bd4f1d3a6876039702d4732a4b7d1($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('qcontent'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            ';
        // 'label' section
        $value = $context->find('label');
        $buffer .= $this->section7176c62f429baff7984d549eeb3ab436($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="qn-answer">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('qformelement'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</fieldset>
';
        // 'notifications' section
        $value = $context->find('notifications');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '<!-- End fieldset generated from question_container template. -->';

        return $buffer;
    }

    private function section7ed986e9c0472d6642258caa64b90904(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'questionnum, mod_questionnaire';
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
                
                $buffer .= 'questionnum, mod_questionnaire';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5965089ff1cbdf635795989d4b29e7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <legend class="accesshide">{{# str }}questionnum, mod_questionnaire{{/ str}}{{{qnum}}}</legend>
    <div class="qn-legend">
        <div class="qn-info">
            <h2 class="qn-number">{{{qnum}}}</h2>
        </div>
        {{{required}}}
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
                
                $buffer .= $indent . '    <legend class="accesshide">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7ed986e9c0472d6642258caa64b90904($context, $indent, $value);
                $value = $this->resolveValue($context->find('qnum'), $context);
                $buffer .= $value;
                $buffer .= '</legend>
';
                $buffer .= $indent . '    <div class="qn-legend">
';
                $buffer .= $indent . '        <div class="qn-info">
';
                $buffer .= $indent . '            <h2 class="qn-number">';
                $value = $this->resolveValue($context->find('qnum'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('required'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section694bd4f1d3a6876039702d4732a4b7d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<label for="{{label.for}}">';
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
                
                $buffer .= '<label for="';
                $value = $this->resolveValue($context->findDot('label.for'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7176c62f429baff7984d549eeb3ab436(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '</label>';
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
                
                $buffer .= '</label>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb8e8ddc9ca3702110812af7d06781d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{.}}}';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $indent . $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
