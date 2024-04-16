<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;

class ChatController extends Controller
{
    private $pusher;

    public function __construct()
    {

        $options = [
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'useTLS' => true
        ];
        $this->pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:15|regex:/^[a-zA-Z]+$/',
        ]);

        $username = $request->input('username');

        $user = User::firstOrCreate(['name' => $username], ['name' => $username]);

        Auth::login($user);

        session(['username' => $username]);

        return redirect()->route('chat');
    }
    public function sendMessage(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['status' => 'Error', 'message' => 'User is not authenticated.']);
        }

        $data = [
            'message' => $request->input('message'),
            'user' => Auth::user()->name
        ];

        $this->pusher->trigger('chat-channel', 'chat-event', $data);

        return response()->json(['status' => 'Message sent!']);

    }
}
