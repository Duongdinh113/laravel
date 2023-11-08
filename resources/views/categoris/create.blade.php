@extends('layout.master')
@section('content')
<h1>ADD CATEGORIS</h1>
    @if(\Session::has('msg'))
        <div class="alert alert-success">
            {{ \Session::get('msg') }}
        </div>
    @endif
<form action="{{route('categoris.store')}}" method="POST">
    @csrf
    <label for="title">Title</label>
    <input type="text" class="form-control " name="title" id="">

    <label for="name">Name</label>
    <input type="text" class="form-control " name="name" id="">

    <label for="describe" class="">Describe</label>
    <textarea class="form-control" name="describe" id="" cols="30" rows="10"></textarea>

    <label for="status">Status</label> <br>

    <input type="radio" name="status-1" id="" value="{{\App\Models\Categoris::STATUS_DRAFT}}">
    <label for="status-1">DRAFT</label>

    <input type="radio" name="status_2" id="" value="{{\App\Models\Categoris::STATUS_PUBLISHED}}">
    <label for="status_2">PUBLISHED</label><br>

    <a href="{{route('categoris.index')}}" class="btn btn-info ">Back</a>
    <button type="submit" class="btn btn-success ">Submit</button>
</form>
@endsection
