@extends('layouts.app')
@section('content')
@include('inc.header');

<div class="container">
    <div class="row">
        @if(session('info'))
        <div class="alert alert-success">{{session('info')}}</div>

        @endif
    <table class="table table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
    // echo"<pre>";
    //     print_r($blogs);
    //           echo "<pre>";
                ?>
                @foreach($blogs as $blog)
  <tr class="table-active">

      <th>{{$blog->id}}</th>
      <td>{{$blog->title}}</td></td>
      <td>{{$blog->description}}</td></td>
      <td>
   <a class="btn btn-info" href="{{route('read',$blog->id)}}">read</a>
     <a class="btn btn-primary" href="{{route('update',$blog->id)}}">update</a>
     <a class="btn btn-danger" href="{{route('delete',$blog->id)}}">delete</a>
      </td>
      @endforeach
    </tr>



  </tbody>
</table>
    </div>
</div>
@endsection
