<?php

namespace vphe\Typeform\Models;

class FormSettingsNotificationRespondent extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $recipient;

    /**
     * @var array
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
     * FormSettingsNotificationRespondent constructor.
     * @param bool $enabled
     * @param string $recipient
     * @param array $reply_to
     * @param string $subject
     * @param string $message
     */
    public function __construct($enabled, $recipient, array $reply_to, $subject, $message)
    {
        $this->enabled = $enabled;
        $this->recipient = $recipient;
        $this->reply_to = $reply_to;
        $this->subject = $subject;
        $this->message = $message;
    }


}