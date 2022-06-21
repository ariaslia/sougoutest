<?php

namespace App\Http\Controllers;

//POSTもでる使う宣言
use App\Post;

//authを使う宣言
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


class PostController extends Controller
{
    //
    function index()
    {
        //postsテーブルから全部のデータをとってくる
        //post.phpからとってくる
        $posts = Post::all();

        //var_dumpと同じ
        // dd($posts);

        //viewのpostsのindexファイルを出力する
        return view('posts.index',['posts'=>$posts]);
    }

    function create()
    {
        return view('posts.create');
    }

    //ララベル標準のRequest
    //入力した内容を$requestに入れる
    function store(Request $request)
    {
        // dd($request);
        //$requestに入っている値を、new postでデータベースに保存するという記述
        $post = new Post;

        //左辺:テーブル　右辺:送られてきた値
        $post -> title = $request -> title;
        $post -> body = $request -> body;
        $post -> user_id = Auth::id();

        $post -> save();
        

        //保存した後にindexに戻る
        return redirect()->route('posts.index');
    }




    //$idはindex.blade.phpから送られたid
    function show($id)
    {
        // dd($id);
        //idを探してpostに格納
        $post = Post::find($id);

        //['post'=>$post]　compact('posts')でもいい
        return view('posts.show',['post'=>$post]);
    }



    function edit($id)
    {
        // dd($id);
        //idを探してpostに格納
        $post = Post::find($id);

        //['post'=>$post]　compact('posts')でもいい
        return view('posts.edit',['post'=>$post]);
    }




    //storeと似ている
    //更新
    function update(Request $request, $id)
    {
        
        $post = Post::find($id);

        //左辺:テーブル　右辺:送られてきた値
        $post -> title = $request -> title;
        $post -> body = $request -> body;

        $post -> save();
        
        //['post'=>$post]　compact('post')でもいい
        return view('posts.show',compact('post'));
    }




    //削除
    function destroy($id)
    {
        // dd($id);
        //idを探してpostに格納
        $post = Post::find($id);
        $post -> delete();

        //['post'=>$post]　compact('posts')でもいい
        return redirect()->route('posts.index');
    }



}
