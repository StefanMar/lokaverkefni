<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request, $id){
        $comment = new Comment;
        $comment->body = $request->body;
        $comment->user_id = auth()->id();
        $comment->thread_id = $id;
        $comment->save();
        return back();
    }
}