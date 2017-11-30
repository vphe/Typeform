<?php

namespace vphe\Typeform\Models;

class FormAttachmentVideo extends Model implements FormAttachment
{
    /**
     * Type of attachment.
     *
     * @var string
     */
    public $type = 'video';

    /**
     * URL for the video you want to display. Use the video's YouTube.com URL.
     *
     * @var string
     */
    public $href;

    /**
     * Optional parameter for responsively scaling videos. Available only for "video" type.
     *
     * @var float
     */
    public $scale;

    /**
     * FormAttachment constructor.
     * @param string $href
     * @param float $scale
     */
    public function __construct($href, $scale = 0.6)
    {
        $this->href = $href;
        $this->scale = $scale;
    }


}