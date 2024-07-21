<?php

namespace App\Http\Controllers\Chat;

use App\Events\ChatMessageSent;
use App\Events\GroupSent;
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

    public function sendMessage(Request $request)
    {

        $message = $request->input('message');

        broadcast(new ChatMessageSent($message))->toOthers();

        return response()->json(['success' => true]);

    }

    public function createGroup(Request $request)
    {
        $groupName = $request->input('group_name');

        broadcast(new GroupSent($groupName))->toOthers();

        return response()->json(['success' => true]);
    }
}
