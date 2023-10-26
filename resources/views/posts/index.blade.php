@extends('home')
@section('home')
<a class="btn btn-primary" href="/post/them">them moi</a>

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($post as $posts)
            <tr>
            <td>{{$posts->title}}</td>
            <td>{{$posts->content}}</td>
            <td>{{$posts->name}}</td>
            <td>{{$posts->username}}</td>
            <td>
                <a href="" class="btn btn-success">Edit</a>
                <a href="{{}}"  method="DELETE" class="btn btn-danger"
                   onclick="return confirm('Bạn có chắc chắn muốn xóa chuyên mục này không?')">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
