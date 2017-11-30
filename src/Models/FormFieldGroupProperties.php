<?php

namespace vphe\Typeform\Models;

class FormFieldGroupProperties extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * Text to display in the button associated with the object.
     *
     * @var string
     */
    public $button_text = 'Continue';

    /**
     * true to display a button. Otherwise, false.
     *
     * @var bool
     */
    public $show_button;

    /**
     * @var array $fields of \vphe\Typeform\Models\FormField objects
     */
    public $fields = array();

    /**
     * FormFieldGroupProperties constructor.
     * @param string $description
     * @param string $button_text
     * @param bool $show_button
     * @param array $fields
     */
    public function __construct($description, $button_text, $show_button, array $fields)
    {
        $this->description = $description;
        $this->button_text = $button_text;
        $this->show_button = $show_button;
        $this->fields = $fields;
    }


}