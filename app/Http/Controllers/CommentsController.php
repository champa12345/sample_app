<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\CommentFormRequest;
use App\Comment;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function newComment(CommentFormRequest $request)
		{
			$comment = new Comment(array(
			'post_id' => $request->get('post_id'),
			'content' => $request->get('content')
			));
			$comment->save();
			return redirect()->back()->with('status', 'Your comment has been created!');
		}
}
