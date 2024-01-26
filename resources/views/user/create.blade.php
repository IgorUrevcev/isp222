@extends('layouts.layout')

@section('title')
    @parent - {{$title}}
@endsection

@section('content')  
<div class="container">
    <h2 class="mb-3 mt-5">Регистрация пользователя</h2>
    <form class="mt-5" action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="mb-3 mt-5">
        @error('name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="Name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="name"
        value="{{old('name')}}">
    </div>

    <div class="mb-3 mt-5">
        @error('email')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control @error('Email') is-invalid @enderror" placeholder="email"
        value="{{old('email')}}">
    </div>

    <div class="mb-3 mt-5">
        @error('password')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="password">
    </div>

    <div class="mb-3 mt-5">
        <label for="password_confirmation" class="form-label">Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Password">
    </div>

    <div class="mb-3 mt-5">
        <label for="avatar" class="form-label">Avatar</label>
        <input type="file" name="avatar" id="avatar" class="form-control-file">
    </div>

    <button type="sudmit" class="btn btn-primary">Отправить</button>
    </form>
</div>
@endsection