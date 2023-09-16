<?php

namespace App\Service\Thread;

use App\Models\Thread;

class CreateThread
{
    public function __invoke(int $userId, string $threadName): Thread
    {
        return Thread::create([
            'user_id' => $userId,
            'name' => $threadName
        ]);
    }
}
