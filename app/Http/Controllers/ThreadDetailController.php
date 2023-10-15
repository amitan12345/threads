<?php

namespace App\Http\Controllers;

class ThreadDetailController extends Controller
{
    public function index(int $threadId)
    {
        return view('thread-detail', ['threadId' => $threadId]);
    }
}
