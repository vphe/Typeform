<?php

namespace vphe\Typeform\Models;

class FormVariables extends Model
{
    /**
     * @var int
     */
    public $score;

    /**
     * @var float
     */
    public $price;

    /**
     * FormVariables constructor.
     * @param int $score
     * @param float $price
     */
    public function __construct($score, $price)
    {
        $this->score = $score;
        $this->price = $price;
    }

}