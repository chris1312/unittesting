<?php

namespace MyProjectTest\Subscription;

use DomainException;
use MyProject\Subscription\MailSender\InMemoryMailSender;
use MyProject\Subscription\SubscribersRepository;
use MyProject\Subscription\Subscription;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class SubscriptionTest extends TestCase
{
    /** @var SubscribersRepository|MockObject */
    private $repository;
    /** @var InMemoryMailSender */
    private $sender;
    /** @var Subscription */
    private $subscription;

    protected function setUp(): void
    {
        $this->repository = $this->createMock(SubscribersRepository::class);
        $this->sender = new InMemoryMailSender();
        $this->subscription = new Subscription($this->repository, $this->sender);
    }

    public function testSubscribeEmailAddressWasPersisted(): void
    {
        $this->repository
            ->expects($this->once())
            ->method('storeEmail');

        $this->subscription->subscribe('kristijonas@gmail.com');
    }

    public function testSubscribeEmailMessageWasSent(): void
    {
        $this->subscription->subscribe('kristijonas@gmail.com');

        $this->assertSame('kristijonas@gmail.com', $this->sender->receiver);
    }

    public function testSubscribeFailsWhenEmailAddressAlreadyExistsInList(): void
    {
        $this->repository->method('emailExists')->willReturn(true);

        $this->expectException(DomainException::class);
        $this->subscription->subscribe('kristijonas@gmail.com');
    }
}
