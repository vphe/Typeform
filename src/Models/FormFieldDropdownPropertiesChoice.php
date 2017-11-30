<?php

namespace vphe\Typeform\Models;

class FormFieldDropdownPropertiesChoice extends Model
{

    /**
     * @var string
     */
    public $label;

    /**
     * FormFieldDropdownPropertiesChoice constructor.
     * @param string $label
     */
    public function __construct($label)
    {
        $this->label = $label;
    }

}