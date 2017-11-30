<?php

namespace vphe\Typeform\Models;

class FormFieldPictureChoiceValidations extends Model
{
    /**
     * true if respondents must provide an answer. Otherwise, false.
     *
     * @var bool
     */
    public $required;

    /**
     * FormFieldPictureChoiceValidations constructor.
     * @param bool $required
     */
    public function __construct($required)
    {
        $this->required = $required;
    }

}