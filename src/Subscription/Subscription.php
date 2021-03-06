<?php

namespace MyProject\Subscription;

use DomainException;
use MyProject\Subscription\MailSender\MailSenderInterface;

class Subscription
{
    /** @var SubscribersRepository */
    private $repository;

    /** @var MailSenderInterface */
    private $mailSender;

    public function __construct(SubscribersRepository $repository, MailSenderInterface $mailSender)
    {
        $this->repository = $repository;
        $this->mailSender = $mailSender;
    }

    public function subscribe(string $email): void
    {
        $subject = 'Your subscription was successful';
        $message = 'Thank you for subscription!';

        if ($this->repository->emailExists($email)) {
            throw new DomainException('You already subscribed');
        }

        $this->repository->storeEmail($email);
        $this->mailSender->sendEmail($email, $subject, $message);
    }
}
