@extends('layouts.layout')
@section('title')
 @parent - {{$title}}
@endsection
@section('content')
<table class="table table-striped">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $user)
    <tr>
    <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->password}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</table>
@endsection