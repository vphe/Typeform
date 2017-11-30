<?php

namespace vphe\Typeform\Models;

class FormThankyouScreen extends Model
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
     * @var \vphe\Typeform\Models\FormThankyouScreenProperties
     */
    public $properties;

    /**
     * @var \vphe\Typeform\Models\FormAttachment|null
     */
    public $attachment;

    /**
     * FormThankyouScreen constructor.
     * @param string $ref
     * @param string $title
     * @param FormThankyouScreenProperties|null $properties
     * @param FormAttachment|null $attachment
     */
    public function __construct($ref, $title, $properties, $attachment)
    {
        $this->ref = $ref;
        $this->title = $title;
        $this->properties = $properties;
        $this->attachment = $attachment;
    }

}