<?php

namespace vphe\Typeform\Models;

class FormLogicAction extends Model
{
    /**
     * Valid values:"jump", "add", "subtract", "multiply", "divide"
     * Behavior the Logic Jump will take.
     *
     * @var string
     */
    public $action;

    /**
     * @var \vphe\Typeform\Models\FormLogicActionDetails
     */
    public $details;

    /**
     * @var \vphe\Typeform\Models\FormLogicActionCondition
     */
    public $condition;

    /**
     * FormLogicAction constructor.
     * @param string $action
     * @param FormLogicActionDetails $details
     * @param FormLogicActionCondition $condition
     */
    public function __construct($action, FormLogicActionDetails $details, FormLogicActionCondition $condition)
    {
        $this->action = $action;
        $this->details = $details;
        $this->condition = $condition;
    }

}