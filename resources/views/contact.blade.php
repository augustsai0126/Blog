@extends('main')

@section('title','| Contact')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <h1>Contact ME</h1>
                <hr>
                <form action="">
                    <div class="from-group">
                        <label name="email">Email:</label>
                        <input id="email" name="email" class="form-control">
                    </div>

                    <div class="from-group">
                        <label name="subject">Subject:</label>
                        <input id="subject" name="subject" class="form-control">
                    </div>

                    <div class="from-group">
                        <label name="message">Message:</label>
                        <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
                    </div>

                    <input type="submit" value="Send Message" class="btn btn-success">
                </form>
            </div>
        </div>
@endsection