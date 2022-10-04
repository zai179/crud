@extends('layouts.master')

@section('content')

    <div class="mt-4" align="right">
       <a href="{{route('addpost')}}" class="btn btn-primary">Add</a>
    </div>
  <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Author</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr >
      <th scope="row">{{$post->id}}</th>
      <td>{{@$post->name}}</td>
      <td>
        <ul>
        @foreach($post->authors as $author)
      <li>{{@$author->name}}</li>
      @endforeach
      </ul>
      </td>
         <td>
        <ul>
        @foreach($post->categories as $cat)
      <li>{{@$cat->name}}</li>
      @endforeach
      </ul>
      </td>
      <td>
        <a href="{{route('delete', ['id' => $post->id])}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>

@endsection
