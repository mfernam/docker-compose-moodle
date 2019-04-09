<?php

class __Mustache_2f30381ba9fde0f342b5eec762765e2c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="mod_questionnaire_viewpage">
';
        $buffer .= $indent . '    <h2>';
        $value = $this->resolveValue($context->find('questionnairename'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '    ';
        // 'intro' section
        $value = $context->find('intro');
        $buffer .= $this->section9de9333a6e50891f06b456ac8fa035f7($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'message' section
        $value = $context->find('message');
        $buffer .= $this->sectionF83faf0f8a6307eec6f7edfd2da2ecfa($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'complete' section
        $value = $context->find('complete');
        $buffer .= $this->section8392ae643ccaaf117717c0d8999151fe($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'guestuser' section
        $value = $context->find('guestuser');
        $buffer .= $this->section4981f81cf431294c0747e95c7a2c54f9($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'yourresponse' section
        $value = $context->find('yourresponse');
        $buffer .= $this->section7ee80a4986c4bf821f75a47bf2a262af($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'allresponses' section
        $value = $context->find('allresponses');
        $buffer .= $this->sectionEd738aeb8339af8e3bab6727e00d6f73($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section9de9333a6e50891f06b456ac8fa035f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="intro">{{{intro}}}</div>';
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
                
                $buffer .= '<div class="intro">';
                $value = $this->resolveValue($context->find('intro'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF83faf0f8a6307eec6f7edfd2da2ecfa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="message">{{{message}}}</div>';
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
                
                $buffer .= '<div class="message">';
                $value = $this->resolveValue($context->find('message'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8392ae643ccaaf117717c0d8999151fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="complete">{{{complete}}}</div>';
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
                
                $buffer .= '<div class="complete">';
                $value = $this->resolveValue($context->find('complete'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4981f81cf431294c0747e95c7a2c54f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="guestuser">{{{guestuser}}}</div>';
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
                
                $buffer .= '<div class="guestuser">';
                $value = $this->resolveValue($context->find('guestuser'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ee80a4986c4bf821f75a47bf2a262af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="yourresponse">{{{yourresponse}}}</div>';
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
                
                $buffer .= '<div class="yourresponse">';
                $value = $this->resolveValue($context->find('yourresponse'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd738aeb8339af8e3bab6727e00d6f73(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="allresponses">{{{allresponses}}}</div>';
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
                
                $buffer .= '<div class="allresponses">';
                $value = $this->resolveValue($context->find('allresponses'), $context);
                $buffer .= $value;
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
