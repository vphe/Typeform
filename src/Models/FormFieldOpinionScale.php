<?php

namespace vphe\Typeform\Models;

class FormFieldOpinionScale extends Model
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
    public $type = 'opinion_scale';

    /**
     * @var \vphe\Typeform\Models\FormFieldOpinionScaleProperties
     */
    public $properties;

    /**
     * @var \vphe\Typeform\Models\FormFieldOpinionScaleValidations
     */
    public $validations;

    /**
     * @var \vphe\Typeform\Models\FormAttachment|null
     */
    public $attachment;

    /**
     * FormFieldOpinionScale constructor.
     * @param $ref
     * @param $title
     * @param FormFieldOpinionScaleProperties $properties
     * @param FormFieldOpinionScaleValidations $validations
     * @param $attachment
     */
    public function __construct(
        $ref,
        $title,
        FormFieldOpinionScaleProperties $properties,
        FormFieldOpinionScaleValidations $validations,
        $attachment
    ) {
        $this->ref = $ref;
        $this->title = $title;
        $this->properties = $properties;
        $this->validations = $validations;
        $this->attachment = $attachment;
    }


}