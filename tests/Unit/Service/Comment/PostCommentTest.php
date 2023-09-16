<?php

namespace Tests\Unit\Service\Comment;

use App\Models\Comment;
use App\Models\Thread;
use App\Service\Comment\PostComment;
use Tests\TestCase;

class PostCommentTest extends TestCase
{
    /**
     * @test
     */
    public function canPostComment(): void
    {
        $thread = Thread::factory()->forUser()->create();
        $user = $thread->user;
        $message = 'hoge';

        // Executing Test
        app(PostComment::class)($user->id, $thread->id, $message);

        $this->assertDatabaseHas(Comment::class, ['user_id' => $user->id, 'thread_id' => $thread->id, 'message' => $message]);
    }

    /**
     * @test
     */
    public function canReturnComment(): void
    {
        $thread = Thread::factory()->forUser()->create();
        $user = $thread->user;
        $message = 'hoge';

        $comment = app(PostComment::class)($user->id, $thread->id, $message);

        $this->assertInstanceOf(Comment::class, $comment);
        $this->assertSame($user->id, $comment->user_id);
        $this->assertSame($thread->id, $comment->thread_id);
        $this->assertSame($message, $comment->message);
    }
}
