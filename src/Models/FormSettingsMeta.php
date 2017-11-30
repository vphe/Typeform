<?php

namespace vphe\Typeform\Models;

class FormSettingsMeta extends Model
{

    /**
     * @var bool
     */
    public $allow_indexing;

    /**
     * @var string
     */
    public $description;

    /**
     * @var array
     */
    public $image = array(
        'href' => ''
    );

    /**
     * FormSettingsMeta constructor.
     * @param bool $allow_indexing
     * @param string $description
     * @param array $image
     */
    public function __construct($allow_indexing, $description, array $image)
    {
        $this->allow_indexing = $allow_indexing;
        $this->description = $description;
        $this->image = $image;
    }

}