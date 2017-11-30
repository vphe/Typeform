<?php

namespace vphe\Typeform\Models;

class FormThankyouScreenProperties extends Model
{
    /**
     * @var bool
     */
    public $show_button;

    /**
     * @var string
     */
    public $button_text;

    /**
     * @var string
     * @options=["reload", "redirect"]
     */
    public $button_mode;

    /**
     * @var string
     */
    public $redirect_url;

    /**
     * @var bool
     */
    public $share_icons;

    /**
     * FormThankyouScreenProperties constructor.
     * @param bool $show_button
     * @param string $button_text
     * @param string $button_mode
     * @param string $redirect_url
     * @param bool $share_icons
     */
    public function __construct($show_button, $button_text, $button_mode, $redirect_url, $share_icons)
    {
        $this->show_button = $show_button;
        $this->button_text = $button_text;
        $this->button_mode = $button_mode;
        $this->redirect_url = $redirect_url;
        $this->share_icons = $share_icons;
    }


}