<?php

namespace vphe\Typeform\Models;

class Form extends Model
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    public $title;

    /**
     * @var \vphe\Typeform\Models\FormSettings
     */
    public $settings;

    /**
     * URL of the theme to use for the typeform.
     *
     * @var array|null
     */
    public $theme;

    /**
     * Array of Hidden Fields to use in the form.
     *
     * @var array|null
     */
    public $hidden = array();

    /**
     * Object of variables
     *
     * @var \vphe\Typeform\Models\FormVariables|array
     */
    public $variables;

    /**
     * @var array $welcome_screens of \vphe\Typeform\Models\FormWelcomeScreen
     */
    public $welcome_screens;

    /**
     * @var array $thankyou_screens of \vphe\Typeform\Models\FormThankyouScreen
     */
    public $thankyou_screens = array();

    /**
     * @var array $fields of \vphe\Typeform\Models\FormField objects
     */
    public $fields = array();

    /**
     * @var array $logic of \vphe\Typeform\Models\FormLogic objects
     */
    public $logic = array();

    /**
     * Form constructor.
     * @param string $title
     * @param FormSettings $settings
     * @param array|null $theme
     * @param array|null $hidden
     * @param FormVariables|array $variables
     * @param array $welcome_screens
     * @param array $thankyou_screens
     * @param array $fields
     * @param array $logic
     */
    public function __construct(
        $title,
        FormSettings $settings,
        $theme,
        $hidden,
        $variables,
        array $welcome_screens,
        array $thankyou_screens,
        array $fields,
        array $logic = array()
    ) {
        $this->title = $title;
        $this->settings = $settings;
        $this->theme = $theme;
        $this->hidden = $hidden;
        $this->variables = $variables;
        $this->welcome_screens = $welcome_screens;
        $this->thankyou_screens = $thankyou_screens;
        $this->fields = $fields;
        $this->logic = $logic;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


}