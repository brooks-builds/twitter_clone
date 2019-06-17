<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|max:25',
            'tweetid' => 'required|numeric'
        ]);

        Comment::create([
            'user_id' => Auth::id(),
            'text' => $request->text,
            'tweets_id' => $request->tweetid
        ]);

        return redirect("/tweets/$request->tweetid");
    }
}
