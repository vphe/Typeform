<?php

namespace vphe\Typeform\Models;

class FormFieldOpinionScaleValidations extends Model
{
    /**
     * true if respondents must provide an answer. Otherwise, false.
     *
     * @var bool
     */
    public $required;

    /**
     * FormFieldOpinionScaleValidations constructor.
     * @param $required
     */
    public function __construct($required)
    {
        $this->required = $required;
    }

}