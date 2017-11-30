<?php

namespace vphe\Typeform\Models;

class FormFieldLongTextProperties extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * FormFieldLongTextProperties constructor.
     * @param string $description
     */
    public function __construct($description)
    {
        $this->description = $description;
    }


}