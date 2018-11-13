@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="left_content">
            <div class="contact_area">
            <h2>Contact Us</h2>
            {!!Form::open(['method'=>'POST', 'action'=>'FeedbackController@store'])!!}
                <input class="form-control" name="name" type="text" placeholder="Name*" required><br>
                <input class="form-control" name="email" type="email" placeholder="Email*" required><br>
                <input class="form-control" name="phone" type="tel"  pattern="^\+?\d{0,10}" placeholder="Phone*" required><br>
                <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Message*" required></textarea><br>
                @if (session('message'))    
                    <div class="alert alert-success text-center">
                        {{Session::get('message')}}
                    </div>
                @endif
                {{Form::submit('Send Message',['class'=>'btn btn-default'])}}
			{!!Form::close()!!}
            </div>
        </div>
    </div>
</div>

@endsection