@extends('layouts.front')

@section('content')

    @foreach($categories as $category)

        <div class="panel panel-info">
            <div class="panel-heading">{{$category->name}}</div>
        </div>

        @foreach($category->subcategory as $subcategory)


            <div class="well well-sm"><a href="{{route('subcategory.display',$subcategory->id)}}">{{$subcategory->name}}</a></div>

        @endforeach

    @endforeach

@endsection