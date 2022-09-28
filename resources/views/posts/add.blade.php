@extends('layouts.master')
@section('content')

<form action="{{route('save-post')}}" method="POST">
    @csrf
    <div class="row">
    <div class="col-5 mt-5">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>

</div>
    <strong>Select Author</strong>

<div class="row ">
    @foreach ($authors as $author)
        <ul>
            <li>
         <label for="">{{$author->name}}</label>
    <input type="checkbox" name="author[]" value="{{$author->id}}" id="">
            </li>
        </ul>

    @endforeach

</div>
<div>select Category</div>
<div class="row ">
    <ul>
        <li>
   @foreach ($categories as $category)
    <label for="">{{$category->name}}</label>
    <input type="checkbox" name="category[]" value="{{$category->id}}" id="">
    @endforeach
        </li>
    </ul>


</div>
<button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
