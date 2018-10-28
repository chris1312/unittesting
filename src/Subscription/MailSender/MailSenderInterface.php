<?php

namespace MyProject\Subscription\MailSender;

interface MailSenderInterface
{
    public function sendEmail(string $to, string $subject, string $message): void;
}
