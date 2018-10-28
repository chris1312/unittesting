<?php

namespace MyProject\Subscription\MailSender;

class PhpMailSender implements MailSenderInterface
{
    public function sendEmail(string $to, string $subject, string $message): void
    {
        mail($to, $subject, $message);
    }
}
