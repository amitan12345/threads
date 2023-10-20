<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OtherUserDashboardController extends Controller
{
    public function index(int $userId)
    {
        if ($userId === Auth::id()) {
            return redirect('/dashboard');
        }

        $user = User::find($userId);

        return view('other-user-dashboard', ['user' => $user]);
    }
}
