@extends('layouts.appHead')

@section('content')

<div class="container">
      <div class="row">
            <div class="col-md-12">
                  <br><br>
                  <table class="table table-bordered table-striped">
                  <tr><th>first name</th>
                  <th>"{{$user->name}}"</th>
                  <tr>
                  <th>surname</th>
                  <td>"{{$user->surname}}"</td>
                  <tr>
                  <th>birthday</th>
                  <td>"{{$user->birthday}}"</td>
                  <tr>
                  <th>blood_group</th>
                  <td>"{{$user->blood_group}}"</td>
                  <tr>
                  <th>age</th>
                  <td>"{{$user->age}}"</td>
                  <tr>
                  <th>gender</th>
                  <td>"{{$user->gender}}"</td>
                  <tr>
                  <th>E-Mail</th>
                  <td>"{{$user->email}}"</td>
                  <tr>
                  <th>patian_type</th>
                  <td>"{{$user->patian_type_id}}"</td>
                  <tr>
                  <th>operation_id</th>
                  <td ><a href="{{ action('operationController@operationShow',$user->id )}}" method="get"> "{{$user->operation_id}}"</a></td>
                  <tr> 
                  <a href="{{action('UsersController@adddoctor',$user->id )}}" class="btn btn-primary">add_doctor</a>
                  <a href="{{action('UsersController@addrestroom',$user->id )}}" class="btn btn-danger">add_room</a>
            </div>
      </div>
</div>
@stop
