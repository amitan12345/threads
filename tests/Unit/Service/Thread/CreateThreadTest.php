<?php

namespace Tests\Unit\Service\Thread;

use App\Models\Thread;
use App\Models\User;
use App\Service\Thread\CreateThread;
use Tests\TestCase;

class CreateThreadTest extends TestCase
{
    /**
     * @test
     */
    public function canCreateThread(): void
    {
        $user = User::factory()->create();
        $threadName = 'hoge';

        // Executing Test
        app(CreateThread::class)($user->id, $threadName);

        $this->assertDatabaseHas(Thread::class, ['user_id' => $user->id, 'name' => $threadName]);
    }

    /**
     * @test
     */
    public function canReturnThread(): void
    {
        $user = User::factory()->create();
        $threadName = 'hoge';

        $thread = app(CreateThread::class)($user->id, $threadName);

        $this->assertInstanceOf(Thread::class, $thread);
        $this->assertSame($user->id, $thread->user_id);
        $this->assertSame($threadName, $thread->name);
    }
}
