<?php

namespace vphe\Typeform\Models;

class FormFieldShortTextProperties extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * FormFieldShortTextProperties constructor.
     * @param string $description
     */
    public function __construct($description)
    {
        $this->description = $description;
    }

}