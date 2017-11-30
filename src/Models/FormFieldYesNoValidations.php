<?php

namespace vphe\Typeform\Models;

class FormFieldYesNoValidations extends Model
{
    /**
     * true if respondents must provide an answer. Otherwise, false.
     *
     * @var bool
     */
    public $required;

    /**
     * FormFieldYesNoValidations constructor.
     * @param bool $required
     */
    public function __construct($required)
    {
        $this->required = $required;
    }


}