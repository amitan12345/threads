<?php

namespace Tests\Unit\Factories;

use App\Models\Thread;
use Tests\TestCase;

class ThreadFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function canCreateRecodeByFactory(): void
    {
        Thread::factory()->forUser()->create();

        $this->assertDatabaseCount(Thread::class, 1);
    }
}
