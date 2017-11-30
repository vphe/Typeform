<?php

namespace vphe\Typeform\Models;

class FormAttachmentImage extends Model implements FormAttachment
{
    /**
     * Type of attachment.
     *
     * @var string
     */
    public $type = 'image';

    /**
     * URL for the image you want to display. Images must already exist in your account---use the image's Typeform URL
     *
     * @var string
     */
    public $href;

    /**
     * FormAttachment constructor.
     * @param string|Image $href
     */
    public function __construct($href)
    {
        $this->href = $href;
    }

}