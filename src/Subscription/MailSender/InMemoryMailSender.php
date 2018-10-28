<?php

namespace MyProject\Subscription\MailSender;

class InMemoryMailSender implements MailSenderInterface
{
    public $receiver;
    public $subject;
    public $message;

    public function sendEmail(string $receiver, string $subject, string $message): void
    {
        $this->receiver = $receiver;
        $this->subject = $subject;
        $this->message = $message;
    }
}
