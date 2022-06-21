@extends('layouts.app_original')
@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
      <div class="col-md-8">
            <div class="card text-center">
          <div class="card-header">
              投稿された一覧
          </div>
          @foreach($posts as $post)
          <div class="card-body">
              <h5 class="card-title">タイトル : {{ 
                $post->tetle }}</h5>
              <p class="card-text">
                投稿された内容 : {{ $post->body }}
              </p>
              <p class="card-text">投稿したひと：{{ $post->user->name }}</p>
              <a href="{{ route('posts.show',$post->id) }}" class="btn btn-primary">詳細画面へ</a>
          </div>
          <div class="card-footer text-muted">
              投稿された日時 : {{ $post->created_at }}
          </div>
          @endforeach
      </div>
      </div>
      <div class="col-md-2">
        <a href="{{ route('posts.create') }}" class="btn btn-primary">
          新規の投稿
        </a>
        <button type="button" class="btn btn-primary" onClick="history.back()">戻る</button>
      </div>
      
  </div>
</div>
@endsection
