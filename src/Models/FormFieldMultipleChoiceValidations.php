<?php

namespace vphe\Typeform\Models;

class FormFieldMultipleChoiceValidations extends Model
{
    /**
     * true if respondents must provide an answer. Otherwise, false.
     *
     * @var bool
     */
    public $required;

    /**
     * FormFieldMultipleChoiceValidations constructor.
     * @param bool $required
     */
    public function __construct($required)
    {
        $this->required = $required;
    }

}