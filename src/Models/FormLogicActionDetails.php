<?php

namespace vphe\Typeform\Models;

class FormLogicActionDetails extends Model
{
    /**
     * Specifies where the Logic Jump leads---to another field ("field"),
     * a Hidden Field ("hidden"), or thank you screen ("end").
     *
     * array['to']
     *      array['to']['type'] = string @options=["field", "hidden", "end"]
     *      array['to']['value']  = string
     *
     * @var array
     */
    public $to;

    /**
     * Keeps a running total for the "score" or "price" variable.
     *
     * array['target']
     *      array['target']['type'] = string "variable"
     *      array['target']['value']  = string @options=["score", "price"]
     *
     * @var array|null
     */
    public $target;

    /**
     * Specifies the numeric value to use in the calculation for the "score" or "price" variable.
     *
     * array['value']
     *      array['value']['type'] = string "constant"]
     *      array['value']['value']  = int
     *
     * @var array|null
     */
    public $value;

    /**
     * FormLogicActionDetails constructor.
     * @param array $to
     * @param array|null $target
     * @param array|null $value
     */
    public function __construct(array $to, $target, $value)
    {
        $this->to = $to;
        $this->target = $target;
        $this->value = $value;
    }

}