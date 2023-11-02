@extends('layout.master')

@section('content')
    <h1>Danh sách bài viết</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <body>
            @foreach ($data as $item)
                {{-- @dd($item) --}}

            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>
                    <img src="{{asset($item->image)}}" alt="" width="100px">
                </td>
                <td>{{$item->status}}</td>
                <td>Action</td>
            </tr>
            @endforeach
        </body>
    </table>
    {{$data->links()}}
@endsection
