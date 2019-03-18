<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
	private $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
    	// get request data
        $data = $request->all();
        $comment = new Comment();

        $comment->body = $data['comment'];
        $comment->news_id = $data['news_id'];

        $comment->save();

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if (!$comment = $this->comment->find($id))
            return redirect()->back();

        $comment->delete();

        return redirect()->route('news.index');
    }
}
