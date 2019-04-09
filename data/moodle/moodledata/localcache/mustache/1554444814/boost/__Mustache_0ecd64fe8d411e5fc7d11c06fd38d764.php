<?php

class __Mustache_0ecd64fe8d411e5fc7d11c06fd38d764 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="mod_questionnaire_questionspage generalbox">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('tabsarea'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('formarea'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
