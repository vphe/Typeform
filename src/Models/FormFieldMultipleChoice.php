<?php

namespace vphe\Typeform\Models;

class FormFieldMultipleChoice extends Model
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
    public $type = 'multiple_choice';

    /**
     * @var \vphe\Typeform\Models\FormFieldMultipleChoiceProperties
     */
    public $properties;

    /**
     * @var \vphe\Typeform\Models\FormFieldMultipleChoiceValidations
     */
    public $validations;

    /**
     * @var \vphe\Typeform\Models\FormAttachment|null
     */
    public $attachment;

    /**
     * FormFieldMultipleChoice constructor.
     * @param string $ref
     * @param string $title
     * @param FormFieldMultipleChoiceProperties $properties
     * @param FormFieldMultipleChoiceValidations $validations
     * @param null|FormAttachment $attachment
     */
    public function __construct(
        $ref,
        $title,
        FormFieldMultipleChoiceProperties $properties,
        FormFieldMultipleChoiceValidations $validations,
        $attachment
    ) {
        $this->ref = $ref;
        $this->title = $title;
        $this->properties = $properties;
        $this->validations = $validations;
        $this->attachment = $attachment;
    }


}