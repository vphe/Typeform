<?php

namespace vphe\Typeform\Models;

class FormSettings extends Model
{

    /**
     * @var string
     */
    public $language;

    /**
     * @var bool
     */
    public $is_public;

    /**
     * @var string
     * @options=["percentage", "proportion"]
     */
    public $progress_bar = 'proportion';

    /**
     * @var bool
     */
    public $show_progress_bar;

    /**
     * @var bool
     */
    public $show_typeform_branding;

    /**
     * @var \vphe\Typeform\Models\FormSettingsMeta
     */
    public $meta;

    /**
     * @var string
     */
    public $redirect_after_submit_url;

    /**
     * @var string
     */
    public $google_analytics;

    /**
     * @var array $notifications of two associative values
     *
     * $notifications['self'] = \vphe\Typeform\Models\FormSettingsNotificationSelf
     * $notifications['respondent'] = \vphe\Typeform\Models\FormSettingsNotificationRespondent
     */
    public $notifications;

    /**
     * FormSettings constructor.
     * @param string $language
     * @param bool $is_public
     * @param string $progress_bar
     * @param bool $show_progress_bar
     * @param bool $show_typeform_branding
     * @param FormSettingsMeta $meta
     * @param string $redirect_after_submit_url
     * @param string $google_analytics
     * @param array $notifications
     */
    public function __construct(
        $language,
        $is_public,
        $progress_bar,
        $show_progress_bar,
        $show_typeform_branding,
        FormSettingsMeta $meta,
        $redirect_after_submit_url,
        $google_analytics,
        $notifications
    ) {
        $this->language = $language;
        $this->is_public = $is_public;
        $this->progress_bar = $progress_bar;
        $this->show_progress_bar = $show_progress_bar;
        $this->show_typeform_branding = $show_typeform_branding;
        $this->meta = $meta;
        $this->redirect_after_submit_url = $redirect_after_submit_url;
        $this->google_analytics = $google_analytics;
        $this->notifications = $notifications;
    }

}