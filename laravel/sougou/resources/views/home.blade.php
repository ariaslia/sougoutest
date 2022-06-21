@extends('layouts.app')

@section('content')
<div class="col-md-2">
    <a href="{{ route('posts.create') }}" class="btn btn-primary">
      新規投稿
    </a>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">お知らせ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ログインできました！
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
