<?php

namespace vphe\Typeform\Models;

class FormFieldPictureChoice extends Model
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
    public $type = 'picture_choice';

    /**
     * @var \vphe\Typeform\Models\FormFieldPictureChoiceProperties
     */
    public $properties;

    /**
     * @var \vphe\Typeform\Models\FormFieldPictureChoiceValidations
     */
    public $validations;

    /**
     * @var \vphe\Typeform\Models\FormAttachment|null
     */
    public $attachment;

    /**
     * FormFieldPictureChoice constructor.
     * @param string $ref
     * @param string $title
     * @param FormFieldPictureChoiceProperties $properties
     * @param FormFieldPictureChoiceValidations $validations
     * @param null|FormAttachment $attachment
     */
    public function __construct(
        $ref,
        $title,
        FormFieldPictureChoiceProperties $properties,
        FormFieldPictureChoiceValidations $validations,
        $attachment
    ) {
        $this->ref = $ref;
        $this->title = $title;
        $this->properties = $properties;
        $this->validations = $validations;
        $this->attachment = $attachment;
    }


}