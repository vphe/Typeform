<?php

namespace vphe\Typeform\Models;

class FormFieldMultipleChoicePropertiesChoice extends Model
{
    /**
     * @var string
     */
    public $ref;

    /**
     * @var string
     */
    public $label;

    /**
     * FormFieldMultipleChoicePropertiesChoice constructor.
     * @param string $ref
     * @param string $label
     */
    public function __construct($ref, $label)
    {
        $this->ref = $ref;
        $this->label = $label;
    }


}