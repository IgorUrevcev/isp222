@extends('layouts.layout')

@section('title')
    @parent - {{$title}}
@endsection

@section('content')  
<div class="container">
    <form class="mt-5" action="{{route('enter.store')}}" method="POST">
        @csrf
    <div class="mb-3 mt-5">
        @error('Name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="Name" class="form-label">Name</label>
        <input type="text" name="Name" id="Name" class="form-control @error('Name') is-invalid @enderror" placeholder="Name"
        value="{{old('Name')}}">
    </div>
    <div class="mb-3 mt-5">
        @error('Email')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="Email" class="form-label">Email</label>
        <input type="email" name="Email" id="Email" class="form-control @error('Email') is-invalid @enderror" placeholder="Email"
        value="{{old('Email')}}">
    </div>
    <div class="mb-3 mt-5">
        @error('Number')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="Number" class="form-label">Number</label>
        <input type="text" name="Number" id="Number" class="form-control @error('Number') is-invalid @enderror" placeholder="Number"
        value="{{old('Number')}}">
    </div>
    <button type="sudmit" class="btn btn-danger">Отправить</button>
    </form>
</div>
@endsection