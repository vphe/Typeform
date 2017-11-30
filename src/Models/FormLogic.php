<?php

namespace vphe\Typeform\Models;

class FormLogic extends Model
{
    /**
     * Valid values: "field", "hidden"
     * Specifies whether the Logic Jump is based on a question field or Hidden Field.
     *
     * @var string
     */
    public $type;

    /**
     * Readable name you can use to reference the Logic Jump object.
     *
     * @var string
     */
    public $ref;

    /**
     * Array of objects that define the Logic Jump's behavior.
     *
     * @var array of \vphe\Typeform\Models\FormLogicAction
     */
    public $actions = array();

    /**
     * FormLogic constructor.
     * @param string $type
     * @param string $ref
     * @param array $actions
     */
    public function __construct($type = '', $ref = '', array $actions = array())
    {
        $this->type = $type;
        $this->ref = $ref;
        $this->actions = $actions;
    }

}