@extends('layouts.layout')

@section('title')
    @parent - {{$title}}
@endsection

@section('content')  
<div class="container">
    <form class="mt-5" action="{{route('post.store')}}" method="POST">
        @csrf
    <div class="mb-3 mt-5">
        @error('title')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title"
        value="{{old('title')}}">
    </div>
    <div class="mb-3">
        @error('content')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <label for="content" class="form-label">Content</label>
        <textarea name="content" name ="content" id="content" class="form-control  @error('title') is-invalid @enderror"  rows="5">{{old('content')}}</textarea>
    </div>
    @error('rubric_id')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    <select name="rubric_id" id="rubric_id" class="form-select mb-3  @error('title') is-invalid @enderror">
        <option selected>Выберите рубрику</option>
        @foreach ($rubrics as $key => $value)
        <option value="{{$key}}"
        @if(old('rubric_id')==$key) selected @endif
        >{{$value}}</option>
         @endforeach
    </select>
    <button type="sudmit" class="btn btn-danger">Отправить</button>
    </form>
</div>
@endsection