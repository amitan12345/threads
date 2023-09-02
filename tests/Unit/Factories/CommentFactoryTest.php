<?php

namespace Tests\Unit\Factories;

use App\Models\Comment;
use App\Models\Thread;
use Tests\TestCase;

class CommentFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function canCreateRecodeByFactory(): void
    {
        $thread = Thread::factory()->forUser()->create();

        Comment::factory()->forUser()->for($thread)->create();

        $this->assertDatabaseCount(Comment::class, 1);
    }
}
