@extends('main')

@section('title','| Honepage')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                 <h1>Welcome to Blog!</h1>
                 <p class="lead">Thank you so muck for visiting.</p>
                 <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                </div>
            </div>
        </div><!-- end of headr .row -->

        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>adfgadfadfgadfadfgadfadfgadfadfgad</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>adfgadfadfgadfadfgadfadfgadfadfgadf</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>adfgadfadfgadfadfgadfadfgadfadfgadf</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>adfgadfadfgadfadfgadfadfgadfadfgadf</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>

            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
@endsection

@section('scripts')
    <script>
        confirm('Welcome My Blog');
    </script>
@endsection