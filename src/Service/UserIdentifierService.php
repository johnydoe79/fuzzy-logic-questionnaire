<?php

namespace App\Service;

use Ramsey\Uuid\Uuid;

class UserIdentifierService
{
    public function generateUserId(): string
    {
        return Uuid::uuid4()->toString();
    }

    public function getUserId(): string
    {
        // В реальном приложении можно использовать сессии или куки
        if (!isset($_COOKIE['user_id'])) {
            $userId = $this->generateUserId();
            setcookie('user_id', $userId, time() + (86400 * 30), "/"); // cookie на 30 дней
            return $userId;
        }

        return $_COOKIE['user_id'];
    }
}