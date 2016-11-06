@extends('main')

@section('title','| Create New Post')

@section('content')

    <div class="row">
    	<div class="col-md-8 col-md-offset-2"> <!-- boostrap 將網頁分成12等分 這個意思表示這個DIV佔8等分 但是這樣不會置中 所以跟他說在這個DIV旁邊有兩等分用掉了 所以2 8 2 這樣8等分就剛好置中-->
    		<h1>Create New Post</h1>
    		<hr>

    		{!! Form::open(array('route' => 'posts.store')) !!}
    		    {{ Form::label('title','Title:') }}
    		    {{ Form::text('title',null,array('class' => 'form-control')) }}

    		    {{ Form::label('body',"Post Body:") }}
    		    {{ Form::textarea('body',null,array('class' => 'form-control')) }}

    		    {{ Form::submit('Create Post',array('class' => 'btn btn-success btn-lg btn-block','style' => 'margin-top: 20px;')) }}
    		{!! Form::close() !!}
    	</div>
    </div>

@endsection