<?php

namespace vphe\Typeform\Models;

class FormFieldMultipleChoiceProperties extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * Answer choices.
     *
     * @var array $choices of \vphe\Typeform\Models\FormFieldMultipleChoicePropertiesChoice
     */
    public $choices = array();

    /**
     * true to allow respondents to select more than one answer choice.
     * false to allow respondents to select only one answer choice.
     *
     * @var bool
     */
    public $allow_multiple_selection;

    /**
     * true if answer choices should be presented in a new random order for each respondent.
     * false if answer choices should be presented in the same order for each respondent.
     *
     * @var bool
     */
    public $randomize;

    /**
     * true to include an "Other" option so respondents can enter a different answer choice from those listed.
     * false to limit answer choices to those listed.
     *
     * @var bool
     */
    public $allow_other_choice;

    /**
     * true if you want to use larger-sized images for answer choices.
     *
     * @var bool
     */
    public $vertical_alignment = false;

    /**
     * FormFieldMultipleChoiceProperties constructor.
     * @param string $description
     * @param FormFieldMultipleChoicePropertiesChoice[] $choices
     * @param bool $allow_multiple_selection
     * @param bool $randomize
     * @param bool $allow_other_choice
     * @param bool $vertical_alignment
     */
    public function __construct(
        $description,
        array $choices,
        $allow_multiple_selection,
        $randomize,
        $allow_other_choice,
        $vertical_alignment
    ) {
        $this->description = $description;
        $this->choices = $choices;
        $this->allow_multiple_selection = $allow_multiple_selection;
        $this->randomize = $randomize;
        $this->allow_other_choice = $allow_other_choice;
        $this->vertical_alignment = $vertical_alignment;
    }


}