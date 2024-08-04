<?php

namespace App\Http\Controllers;

use App\Events\ChatMessageEvent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        $request->validate([
            'group_id' => 'required|exists:groups,id',
            'message' => 'required|string',
            'sender_id' => 'required|string'
        ]);

        broadcast(new ChatMessageEvent($request->group_id, $request->message, $request->sender_id))->toOthers();

        return response()->json(['status' => 'Message sent']);
    }
}
