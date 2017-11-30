<?php

namespace vphe\Typeform\Models;

class FormFieldDropdownProperties extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * Available for dropdown types.
     *
     * @var bool
     */
    public $alphabetical_order;

    /**
     * Answer choices.
     *
     * @var array $choices of \vphe\Typeform\Models\FormFieldDropdownPropertiesChoice
     */
    public $choices = array();

    /**
     * FormFieldDropdownProperties constructor.
     * @param string $description
     * @param bool $alphabetical_order
     * @param array $choices
     */
    public function __construct($description, $alphabetical_order, array $choices)
    {
        $this->description = $description;
        $this->alphabetical_order = $alphabetical_order;
        $this->choices = $choices;
    }


}