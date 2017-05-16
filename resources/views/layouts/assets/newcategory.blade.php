@extends('layouts.front')

@section('content')

    <div class="well bs-component">
        <form class="form-horizontal" action="{{route('category.store')}}" method="post" role="form">
            {{csrf_field()}}

            <legend>Create new category:</legend>

            <div class="form-group">
                <div class="col-lg-4">
                    <input type="text" name="name" class="form-control" id="inputEmail" placeholder="Category name">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>

        </form>

        <hr>

        <form class="form-horizontal" action="{{route('subcategory.store')}}" method="post" role="form">
            {{csrf_field()}}

            <legend>Create new sub-category:</legend>

            <div class="form-group">
                <div class="col-lg-4">
                    <input type="text" name="name" class="form-control" id="inputEmail" placeholder="Subcategory name">
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-4">
                    <select class="form-control" id="sel1" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>

        </form>
    </div>

@endsection