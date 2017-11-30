<?php

namespace vphe\Typeform\Models;

class FormLogicActionConditionVar extends Model
{
    /**
     * Type of value the condition object refers to.
     *
     * @var string
     * @options=["field", "hidden", "variable", "constant", "end"]
     */
    public $type;

    /**
     * Value to check for in the "type" field to evaluate with the operator.
     *
     * @var string
     */
    public $value;

    /**
     * FormLogicActionConditionVar constructor.
     * @param $type
     * @param string $value
     */
    public function __construct($type, $value)
    {
        $this->type = $type;
        $this->value = $value;
    }

}