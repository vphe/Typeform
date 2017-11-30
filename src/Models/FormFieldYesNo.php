<?php

namespace vphe\Typeform\Models;

class FormFieldYesNo extends Model
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
    public $type = 'yes_no';

    /**
     * @var \vphe\Typeform\Models\FormFieldYesNoProperties
     */
    public $properties;

    /**
     * @var \vphe\Typeform\Models\FormFieldYesNoValidations
     */
    public $validations;

    /**
     * @var \vphe\Typeform\Models\FormAttachment|null
     */
    public $attachment;

    /**
     * FormFieldYesNo constructor.
     * @param string $ref
     * @param string $title
     * @param FormFieldYesNoProperties $properties
     * @param FormFieldYesNoValidations $validations
     * @param null|FormAttachment $attachment
     */
    public function __construct(
        $ref,
        $title,
        FormFieldYesNoProperties $properties,
        FormFieldYesNoValidations $validations,
        $attachment
    ) {
        $this->ref = $ref;
        $this->title = $title;
        $this->properties = $properties;
        $this->validations = $validations;
        $this->attachment = $attachment;
    }


}