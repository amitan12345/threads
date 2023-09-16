<?php

namespace App\Service\Comment;

use App\Models\Comment;

class PostComment
{
    public function __invoke(int $userId, int $threadId, string $message): Comment
    {
        return Comment::create([
            'user_id' => $userId,
            'thread_id' => $threadId,
            'message' => $message
        ]);
    }
}
