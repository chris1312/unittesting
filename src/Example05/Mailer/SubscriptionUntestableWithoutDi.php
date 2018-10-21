<?php

namespace MyProject\Example05\Mailer;

use DomainException;
use PDO;

class SubscriptionUntestableWithoutDi
{
    private $connection;

    public function __construct()
    {
        $this->connection = new PDO('mysql://my_db');
    }

    public function subscribe(string $email): void
    {
        $subject = 'Your subscription was successful';
        $message = 'Thank you for subscription!';

        $result = $this->connection->query('SELECT * FROM subscribers WHERE email = ?', [$email])->fetch();

        if ($result) {
            throw new DomainException('You already subscribed');
        }

        $this->connection->query(sprintf('INSERT INTO subscribers (email) VALUES ("%s")', $email));

        mail($email, $subject, $message);
    }
}
