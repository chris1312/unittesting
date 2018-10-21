<?php

namespace MyProject\Example05\Mailer\Sender;

class PhpMailSender implements MailSenderInterface
{
    public function sendEmail(string $to, string $subject, string $message): void
    {
        mail($to, $subject, $message);
    }
}
