<?php

namespace vphe\Typeform\Models;

class FormFieldShortText extends Model implements FormField
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
    public $type = 'short_text';

    /**
     * @var \vphe\Typeform\Models\FormFieldShortTextProperties
     */
    public $properties;

    /**
     * @var \vphe\Typeform\Models\FormFieldShortTextValidations
     */
    public $validations;

    /**
     * @var \vphe\Typeform\Models\FormAttachment|null
     */
    public $attachment;


    /**
     * FormField constructor.
     * @param $ref
     * @param $title
     * @param FormFieldShortTextProperties $properties
     * @param FormFieldShortTextValidations $validations
     * @param FormAttachment $attachment
     */
    public function __construct(
        $ref,
        $title,
        FormFieldShortTextProperties $properties,
        FormFieldShortTextValidations $validations,
        $attachment
    ) {
        $this->ref = $ref;
        $this->title = $title;
        $this->properties = $properties;
        $this->validations = $validations;
        $this->attachment = $attachment;
    }

}