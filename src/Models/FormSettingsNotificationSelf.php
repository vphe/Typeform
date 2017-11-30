<?php

namespace vphe\Typeform\Models;

class FormSettingsNotificationSelf extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var array
     */
    public $recipients;

    /**
     * @var string
     */
    public $reply_to;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $message;

    /**
     * FormSettingsNotificationSelf constructor.
     * @param bool $enabled
     * @param array $recipients
     * @param string $reply_to
     * @param string $subject
     * @param string $message
     */
    public function __construct($enabled, array $recipients, $reply_to, $subject, $message)
    {
        $this->enabled = $enabled;
        $this->recipients = $recipients;
        $this->reply_to = $reply_to;
        $this->subject = $subject;
        $this->message = $message;
    }


}