<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Reply;

class ReplyController extends Controller
{
    public function index(int $id) {
        $current_comment = Comment::find($id);
        $replies = $current_comment->replies()->get();

        return view('reply/index', compact('replies'));
    }
}
