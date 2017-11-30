<?php

namespace vphe\Typeform\Models;

class FormWelcomeScreen extends Model
{
    /**
     * @var string
     */
    public $ref;

    /**
     * @var string
     */
    public $title;

    /**
     * @var \vphe\Typeform\Models\FormWelcomeScreenProperties
     */
    public $properties;

    /**
     * @var \vphe\Typeform\Models\FormAttachment|null
     */
    public $attachment;

    /**
     * FormWelcomeScreen constructor.
     * @param string $ref
     * @param string $title
     * @param FormWelcomeScreenProperties $properties
     * @param FormAttachment|null $attachment
     */
    public function __construct($ref, $title, FormWelcomeScreenProperties $properties, $attachment)
    {
        $this->ref = $ref;
        $this->title = $title;
        $this->properties = $properties;
        $this->attachment = $attachment;
    }

}