<?php

namespace vphe\Typeform\Models;

class Image extends Model
{

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $src;

    /**
     * @var string
     */
    public $file_name;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $media_type;

    /**
     * @var bool
     */
    public $has_alpha;

    /**
     * @var string
     */
    public $avg_color;

    /**
     * Image constructor.
     * @param string $id
     * @param string $src
     * @param string $file_name
     * @param int $width
     * @param int $height
     * @param string $media_type
     * @param bool $has_alpha
     * @param string $avg_color
     */
    public function __construct($id, $src, $file_name, $width, $height, $media_type, $has_alpha, $avg_color)
    {
        $this->id = $id;
        $this->src = $src;
        $this->file_name = $file_name;
        $this->width = $width;
        $this->height = $height;
        $this->media_type = $media_type;
        $this->has_alpha = $has_alpha;
        $this->avg_color = $avg_color;
    }

}