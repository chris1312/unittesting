<?php

namespace MyProject\Example04\Mailer;

use PDO;

class SubscribersRepository
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function storeEmail(string $email): void
    {
        $this->connection->query(sprintf('INSERT INTO subscribers (email) VALUES ("%s")', $email));
    }

    public function emailExists(string $email): bool
    {
        $result = $this->connection->query(sprintf('INSERT INTO subscribers (email) VALUES ("%s")', $email))->fetch();

        return !empty($result);
    }
}
