<?php

namespace MyProject\Example04\Mailer\Sender;

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
