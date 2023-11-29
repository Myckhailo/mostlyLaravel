@extends('layout')
@section('title') reviewse @endsection
@section('other_content')

<h1 style="margin-top: 100px">Form for adding review </h1>


@if($errors->any())
<div class="alert alert-danger">
    <ul>
        <li>
            @foreach($errors->all() as $error)
                <li>{($error)}</li>
            @endforeach
        </li>
    </ul>
</div>

@endif

<form method="post" action="/review/check">
    @csrf
    <input style="margin-top: 20px" type="email" name="email" id="email" placeholder="provide your email" class="form-control"><br>
    <textarea name="subject" type="text" id="subject" class="form-control" placeholder="provide your review"></textarea>
    <textarea style="margin-top: 20px" name="message" id="massage" class="form-control" placeholder="provide your massege"></textarea>
    <button style="margin-top: 20px" type="submit" class=" btn btn-success">Submit</button>
</form>

<h1>All reviews</h1>
@foreach($reviews as $el)
<div class="alert alert-warning">
    <h3>{{$el->email}}</h3>
    <b>{{$el->subject}}</b>
    <p>{{$el->message}}</p>

</div>
@endforeach

@endsection