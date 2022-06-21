<?php

namespace App\Http\Controllers;

//
use App\Post;
use App\Comment;
use Auth;

use Illuminate\Http\Request;

//


class CommentController extends Controller
{
    //
    public function create($post_id)
    {
        $post = Post::find($post_id);
        return view('comments.create',compact('post'));
    }


    function store(Request $request)
    {
        // dd($request);
        $post = Post::find($request->post_id);

        //$requestに入っている値を、new postでデータベースに保存するという記述
        $comment = new Comment;

        //左辺:テーブル　右辺:送られてきた値
        $comment -> body = $request -> body;
        $comment -> user_id = Auth::id();
        $comment -> post_id = $request -> post_id;

        $comment -> save();
        

        //保存した後に戻る 紐づいたまま
        return redirect()->route('posts.show',$post->id);
    }
}
