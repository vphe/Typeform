<?php

namespace vphe\Typeform\Models;

class FormFieldYesNoProperties extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * FormFieldYesNoProperties constructor.
     * @param string $description
     */
    public function __construct($description)
    {
        $this->description = $description;
    }


}