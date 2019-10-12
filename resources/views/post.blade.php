@extends('layouts')
@section('title', 'POST')
@section('contents')
<!-- Code -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Post
        <small>Post</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <section class="content container-fluid">
      @if(empty($posts))
      <p>No Data</p>
    @else
      <table class="table">
        <thead>
          <th>Id</th>
          <th>Title</th>
          <th>Content</th>
          <th>Name</th>
          <th>User_id</th>
          <th>Category_id</th>
            <th><a href="{{route('posts.create')}}" class="btn btn-success">Create</a></th>

        </thead>
        <tbody>
          @foreach($posts as $post)
            <tr>
              <td>{{$post['id']}}</td>
              <td>{{$post['title']}}</td>
              <td>{{$post['content']}}</td>
              <td>{{$post['user']['name']}}</td> 
              <td>{{$post['user_id']}}</td>
              <td>{{$post['category_id']}}</td>
              <td>
                  <a href="{{ route('posts.show',['id'=>$post['id']]) }}" class="btn btn-success">Details</a>
               </td>
              <td><a href="{{ route('posts.edit',['id'=>$post['id']]) }}" class="btn btn-primary">Update</a></td>
              <td>                  
                <form action="{{ route('posts.delete',['id'=>$post['id']]) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
    </section>
    
  </div>
@endsection