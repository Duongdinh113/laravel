@extends('layout.master')

@section('content')
<div>
    @if (\Session::has('msg'))
    <div class="alert alert-success ">
        {{\Session::get('msg')}}
    </div>

    @endif
</div>
<form action="{{ route('posts.update',['post'=>$post->id]) }}" method="POST">

    @csrf
    @method('PUT')

   <label for="title">title</label>
   <input type="text" name="title" id="title" class="form-control " value="{{$post->title}}">

   <label for="describe">describe</label>
   <textarea type="text" name="describe" id="describe" class="form-control" >{{$post->describe}}</textarea>


   <label for="status">status</label>

   <input type="radio" name="status" id="status-1"
   @if($post->status == \App\Models\Post::STATUS_DRAFT) checked @endif
   value="{{ \App\Models\Post::STATUS_DRAFT }}">
    <label for="">DRAFT</label>

    <input type="radio" name="status" id="status-2"
    @if($post->status == \App\Models\Post::STATUS_PUBLISHED) checked @endif
    value="{{ \App\Models\Post::STATUS_PUBLISHED }}">
    <label for="">FUBLISHED</label>

    <button type="submit" class="">Submit</button>
    <a href="{{route('posts.index')}}" class="btn btn-info ">quay lai trang list</a>
</form>
@endsection

