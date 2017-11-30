<?php

namespace vphe\Typeform\Models;

class FormLogicActionCondition extends Model
{
    /**
     * Operator for the condition.
     *
     * @var string
     * @options=["begins_with", "ends_with", "contains", "not_contains", "lower_than", "lower_equal_than", "greater_than", "greater_equal_than", "is", "is_not", "equal", "not_equal", "always", "on", "not_on", "earlier_than", "earlier_than_or_on", "later_than", "later_than_or_on"]
     */
    public $op;

    /**
     * Object that defines the field type and value to evaluate with the operator.
     *
     * @var array $vars of \vphe\Typeform\Models\FormLogicActionConditionVar
     */
    public $vars = array();

    /**
     * FormLogicActionCondition constructor.
     * @param $op
     * @param array|null $vars of \vphe\Typeform\Models\FormLogicActionConditionVar
     */
    public function __construct($op, $vars)
    {
        $this->op = $op;
        $this->vars = $vars;
    }

}