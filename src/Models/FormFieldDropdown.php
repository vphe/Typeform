<?php

namespace vphe\Typeform\Models;

class FormFieldDropdown extends Model
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
    public $type = 'dropdown';

    /**
     * @var \vphe\Typeform\Models\FormFieldDropdownProperties
     */
    public $properties;

    /**
     * @var \vphe\Typeform\Models\FormFieldDropdownValidations
     */
    public $validations;

    /**
     * @var \vphe\Typeform\Models\FormAttachment|null
     */
    public $attachment;

    /**
     * FormFieldDropdown constructor.
     * @param string $ref
     * @param string $title
     * @param FormFieldDropdownProperties $properties
     * @param FormFieldDropdownValidations $validations
     * @param null|FormAttachment $attachment
     */
    public function __construct(
        $ref,
        $title,
        FormFieldDropdownProperties $properties,
        FormFieldDropdownValidations $validations,
        $attachment
    ) {
        $this->ref = $ref;
        $this->title = $title;
        $this->properties = $properties;
        $this->validations = $validations;
        $this->attachment = $attachment;
    }


}