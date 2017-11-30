<?php

namespace vphe\Typeform\Models;

class FormFieldShortTextValidations extends Model
{
    /**
     * true if respondents must provide an answer. Otherwise, false.
     *
     * @var bool
     */
    public $required;

    /**
     * Maximum number of characters allowed in the answer.
     *
     * @var int|null
     */
    public $max_length;

    /**
     * FormFieldShortTextValidations constructor.
     * @param bool $required
     * @param int|null $max_length
     */
    public function __construct($required, $max_length = null)
    {
        $this->required = $required;
        $this->max_length = $max_length;
    }

}