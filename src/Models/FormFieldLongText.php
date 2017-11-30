<?php

namespace vphe\Typeform\Models;

class FormFieldLongText extends Model implements FormField
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
    public $type = 'long_text';

    /**
     * @var \vphe\Typeform\Models\FormFieldLongTextProperties
     */
    public $properties;

    /**
     * @var \vphe\Typeform\Models\FormFieldLongTextValidations
     */
    public $validations;

    /**
     * @var \vphe\Typeform\Models\FormAttachment|null
     */
    public $attachment;

    /**
     * FormFieldLongText constructor.
     * @param string $ref
     * @param string $title
     * @param FormFieldLongTextProperties $properties
     * @param FormFieldLongTextValidations $validations
     * @param null|FormAttachment $attachment
     */
    public function __construct(
        $ref,
        $title,
        FormFieldLongTextProperties $properties,
        FormFieldLongTextValidations $validations,
        $attachment
    ) {
        $this->ref = $ref;
        $this->title = $title;
        $this->properties = $properties;
        $this->validations = $validations;
        $this->attachment = $attachment;
    }


}