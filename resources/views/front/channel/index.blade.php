@extends('front.layout.app')

@section('content')

    <div class="container">
        @include('front.channel.create')

        <h1>index channels</h1>

        <div class="row">
        @if($rows)
            @foreach($rows as $row)
                <div class="col-md-4">
                    <a href="{{route('channel.show',$row->id)}}">
                        {{$row->id}}: {{$row->name}}</a>
                </div>
            @endforeach
        @endif
        </div>

    </div>
@endsection