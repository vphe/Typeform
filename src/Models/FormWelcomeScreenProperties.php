<?php

namespace vphe\Typeform\Models;

class FormWelcomeScreenProperties extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $show_button;

    /**
     * @var string
     */
    public $button_text;

    /**
     * FormWelcomeScreenProperties constructor.
     * @param string $description
     * @param bool $show_button
     * @param string $button_text
     */
    public function __construct($description, $show_button, $button_text)
    {
        $this->description = $description;
        $this->show_button = $show_button;
        $this->button_text = $button_text;
    }

}