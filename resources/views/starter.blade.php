@extends('layouts')
@section('title', 'HOME PAGE')
@section('contents')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      @if(empty($users))
        <p>No Data</p>
      @else
        <table class="table">
          <thead>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>BirthDay</th>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{$user['name']}}</td>
              <td>{{$user['address']}}</td>
              <td>{{$user['email']}}</td>
              <td>{{$user['birthday']}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      @endif
    </section>
  </div>
@endsection