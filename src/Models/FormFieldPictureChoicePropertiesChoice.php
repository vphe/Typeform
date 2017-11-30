<?php

namespace vphe\Typeform\Models;

class FormFieldPictureChoicePropertiesChoice extends Model
{
    /**
     * @var string
     */
    public $ref;

    /**
     * @var string
     */
    public $label;

    /**
     * Identifies the image to use for the answer choice. Available only for "picture_choice" types.
     *
     * @var \vphe\Typeform\Models\FormAttachmentImage
     */
    public $attachment;

    /**
     * FormFieldPictureChoicePropertiesChoice constructor.
     * @param string $ref
     * @param string $label
     * @param FormAttachmentImage $attachment
     */
    public function __construct($ref, $label, FormAttachmentImage $attachment)
    {
        $this->ref = $ref;
        $this->label = $label;
        $this->attachment = $attachment;
    }


}