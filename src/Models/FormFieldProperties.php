<?php

namespace vphe\Typeform\Models;

class FormFieldProperties extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var array $choices of \vphe\Typeform\Models\FormFieldPropertiesChoice
     */
    public $choices = array();

    /**
     * true to allow respondents to select more than one answer choice.
     * false to allow respondents to select only one answer choice.
     * Available for "multiple_choice" and "picture_choice" types of fields.
     *
     * @var bool
     */
    public $allow_multiple_selection;

    /**
     * true if answer choices should be presented in a new random order for each respondent.
     * false if answer choices should be presented in the same order for each respondent.
     * Available for multiple_choice and picture_choice types.
     *
     * @var bool
     */
    public $randomize;

    /**
     * Available for multiple_choice and picture_choice types.
     *
     * @var bool
     */
    public $allow_other_choice;

    /**
     * true to list answer choices vertically.
     * false to list answer choices horizontally.
     * Available for multiple_choice types.
     *
     * @var bool
     */
    public $vertical_alignment;

    /**
     * true if you want to use larger-sized images for answer choices.
     * Otherwise, false. Available for picture_choice types.
     *
     * @var bool
     */
    public $supersized;

    /**
     * @var bool
     */
    public $show_labels;

    /**
     * @var bool
     */
    public $alphabetical_order;

    /**
     * @var bool
     */
    public $hide_marks;

    /**
     * Text to display in the button associated with the object.
     * Available for group, payment, and statement types.
     *
     * @var string
     */
    public $button_text = 'Continue';

    /**
     * Number of steps in the scale's range. Minimum is 5 and maximum is 11.
     * Available for opinion_scale and rating types.
     *
     * @var float
     */
    public $steps;

    /**
     * Shape to display on the scale's steps. Available for opinion_scale and rating types.
     *
     * @var string
     */
    public $shape;

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
     * Format for month, date, and year in answer.
     * Available for date types.
     * Valid values: "MMDDYYYY", "DDMMYYYY", "YYYYMMDD"
     *
     * @var string
     */
    public $structure = 'DDMMYYYY';

    /**
     * Character to use between month, day, and year in answer.
     * Available for date types.
     * Valid values: "/", "-", "."
     *
     * @var string
     */
    public $separator = '/';

    /**
     * Currency of the payment.
     * Available for payment types.
     *
     * @var string
     */
    public $currency = 'EUR';

    /**
     * Price of the item. Available for payment fields.
     *
     * @var array
     */
    public $price = array(
        'type' => 'variable',
        'value' => 'price'
    );

    /**
     * true to display a button. Otherwise, false.
     * Available for group and payment types.
     *
     * @var bool
     */
    public $show_button;

    /**
     * FormFieldProperties constructor.
     * @param string $description
     * @param array $choices
     * @param bool $allow_multiple_selection
     * @param bool $randomize
     * @param bool $allow_other_choice
     * @param bool $vertical_alignment
     * @param bool $supersized
     * @param bool $show_labels
     * @param bool $alphabetical_order
     * @param bool $hide_marks
     * @param string $button_text
     * @param float $steps
     * @param string $shape
     * @param array $labels
     * @param bool $start_at_one
     * @param string $structure
     * @param string $separator
     * @param string $currency
     * @param array $price
     * @param bool $show_button
     */
    public function __construct(
        $description,
        array $choices = array(),
        $allow_multiple_selection,
        $randomize,
        $allow_other_choice,
        $vertical_alignment,
        $supersized,
        $show_labels,
        $alphabetical_order,
        $hide_marks,
        $button_text,
        $steps,
        $shape,
        array $labels = array(),
        $start_at_one,
        $structure,
        $separator,
        $currency,
        array $price = array(),
        $show_button
    ) {
        $this->description = $description;
        $this->choices = $choices;
        $this->allow_multiple_selection = $allow_multiple_selection;
        $this->randomize = $randomize;
        $this->allow_other_choice = $allow_other_choice;
        $this->vertical_alignment = $vertical_alignment;
        $this->supersized = $supersized;
        $this->show_labels = $show_labels;
        $this->alphabetical_order = $alphabetical_order;
        $this->hide_marks = $hide_marks;
        $this->button_text = $button_text;
        $this->steps = $steps;
        $this->shape = $shape;
        $this->labels = $labels;
        $this->start_at_one = $start_at_one;
        $this->structure = $structure;
        $this->separator = $separator;
        $this->currency = $currency;
        $this->price = $price;
        $this->show_button = $show_button;
    }


}