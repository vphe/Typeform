<?php

namespace vphe\Typeform\Models;

class FormFieldGroup extends Model
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
     * @var string
     */
    public $type = 'group';

    /**
     * @var \vphe\Typeform\Models\FormFieldGroupProperties
     */
    public $properties;

    /**
     * @var \vphe\Typeform\Models\FormAttachment|null
     */
    public $attachment;

    /**
     * FormFieldGroup constructor.
     * @param string $ref
     * @param string $title
     * @param FormFieldGroupProperties $properties
     * @param null|FormAttachment $attachment
     */
    public function __construct($ref, $title, FormFieldGroupProperties $properties, $attachment)
    {
        $this->ref = $ref;
        $this->title = $title;
        $this->properties = $properties;
        $this->attachment = $attachment;
    }


}