<?php

namespace MyProject\Example04\Mailer\Sender;

interface MailSenderInterface
{
    public function sendEmail(string $to, string $subject, string $message): void;
}
