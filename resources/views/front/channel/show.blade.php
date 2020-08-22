@extends('front.layout.app')

@section('content')

    <div class="container">

<h1>{{$row->id}}: {{$row->name}}</h1>


<h1>Reviews</h1>
<form method="post" action="{{route('channel.store')}}">
    @csrf

    <div class="from-group">
        <label for="">Review</label>
        <textarea name="review" id="" class="form-control" cols="30" rows="4"></textarea>
    </div>

    <div class="from-group">
        <label for="">Star</label>

        <select name="star" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>

    <div class="from-group mt-3">
        <button class="btn btn-primary">Review</button>
    </div>
</form>
    </div>

    @endsection