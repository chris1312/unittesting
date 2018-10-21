<?php

namespace MyProject\Example05\Mailer\Sender;

interface MailSenderInterface
{
    public function sendEmail(string $to, string $subject, string $message): void;
}
