<?php

namespace MyProject\Example04\Mailer;

use PDO;

class SubscriptionUntestable
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function subscribe(string $email): void
    {
        $subject = 'Your subscription was successful';
        $message = 'Thank you for subscription!';

        $this->connection->query(sprintf('INSERT INTO subscribers (email) VALUES ("%s")', $email));

        mail($email, $subject, $message);
    }
}
