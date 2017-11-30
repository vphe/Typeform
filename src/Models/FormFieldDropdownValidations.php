<?php

namespace vphe\Typeform\Models;

class FormFieldDropdownValidations extends Model
{
    /**
     * true if respondents must provide an answer. Otherwise, false.
     *
     * @var bool
     */
    public $required;

    /**
     * FormFieldDropdownValidations constructor.
     * @param bool $required
     */
    public function __construct($required)
    {
        $this->required = $required;
    }


}