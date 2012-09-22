<?php

namespace Liip\RD\UserQuestion;

class SimpleQuestion implements UserQuestionInterface
{
    protected $text;
    protected $defaultValue;
    protected $answer;

    public function __construct($text, $default = null)
    {
        $this->text = $text;
        $this->defaultValue = $default;
    }

    public function getQuestionText()
    {
        return $this->text . "\n";
    }

    public function getDefaultValue()
    {
        return $this->defaultValue;
    }
}
