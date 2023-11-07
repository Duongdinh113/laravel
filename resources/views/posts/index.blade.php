@extends('layout.master')

@section('content')
    <h1>Danh sách bài viết</h1>
    <a href="{{route('posts.create')}}">them moi</a>
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
                <td>
                    <form id="item-{{ $item->id }}" action="{{route('posts.destroy',$item)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-info" href="{{route('posts.show',$item->id)}}">Show</a>

                        <a class="btn btn-primary" href="{{route('posts.edit',$item->id)}}">Edit</a>


                            {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                        <button type="submit" class="btn btn-danger" onclick="
                        if(comfirm('có chắc chắn muốn xóa không')){
                            document.getElementByid('item{{$item->id}}').submit()}">
                            Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </body>
    </table>
    {{$data->links()}}
@endsection
