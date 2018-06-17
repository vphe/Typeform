<?php

namespace vphe\Typeform\Models;

class FormFieldOpinionScaleProperties extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * number of steps, from 5 to 11
     *
     * @var int
     */
    public $steps = false;

    /**
     * Label to help respondents understand the scale's range.
     * Available for opinion_scale and rating types.
     *
     * @var array
     */
    public $labels = array(
        'left' => '',
        'right' => '',
        'center' => ''
    );

    /**
     * true if range numbering should start at 1.
     * false if range numbering should start at 0.
     * Available for opinion_scale types.
     *
     * @var bool
     */
    public $start_at_one;

    /**
     * FormFieldOpinionScaleProperties constructor.
     *
     * @param $description
     * @param $steps
     * @param $labels
     * @param $start_at_one
     */
    public function __construct(
        $description,
        $steps,
        $labels,
        $start_at_one
    ) {
        $this->description = $description;
        $this->steps = $steps;
        $this->labels = $labels;
        $this->start_at_one = $start_at_one;
    }


}