@extends('layouts.front')

@section('content')

    <div class="panel panel-primary">
        <div class="panel-heading">Threads in this category</div>
    </div>

    @foreach($threads as $topic)
        <div class="well well-sm"><a href="{{route('subcategory.display',$topic->id)}}">{{$topic->name}}</a></div>
    @endforeach

@endsection