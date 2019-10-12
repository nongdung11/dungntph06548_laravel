@extends('layouts')
@section('title', 'Show')
@section('contents')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Show
                <small>Show</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content container-fluid">

            <form action="" method="POST">
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $users->name }}">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ $users->email }}">
                </div>
                <div class="form-group">
                    <label for="phonenumber" class="form-label">Phonenumber</label>
                    <input type="text" name="phonenumber" class="form-control" id="phonenumber" value="{{ $users->phonenumber }}">
                </div>                
                <div class="form-group">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" name="birthday" class="form-control" id="birthday" value="{{ $users->birthday }}">
                </div>
                <div class="form-group">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" name="role" class="form-control" id="role" value="{{ $users->role }}">
                </div>                

            </form>
            <form action="{{route('index')}}">
            @csrf
                <div class="form-group">
                    <button class="btn btn-danger">Back</button>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection