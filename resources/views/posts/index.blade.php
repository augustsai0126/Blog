@extends('main')

@section('title', '| View Post')

@section('content')

    <div class="row">
      <div class="col-md-10">
        <h1>所有文章</h1>
      </div>

      <div class="col-md-2">
        <a href="{{ route('posts.create') }}" class="btn btn-ln btn-block btn-primary">新增文章</a>
      </div>
      <hr>
    </div>

    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <th>#</th>
            <th>標題</th>
            <th>內容</th>
            <th>發佈時間</th>
            <th></th>
          </thead>

          <tbody>
            @foreach($posts as $post)
              <tr>
                <th>{{ $post->id }}</th>
                <th>{{ $post->title }}</th>
                <th>{{ $post->body }}</th>
                <th>{{ $post->created_at }}</th>
                <th><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default">查看</a><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">編輯</a></th>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

@endsection
