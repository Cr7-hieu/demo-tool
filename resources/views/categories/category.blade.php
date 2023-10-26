@extends('home')
@section('home')
<a class="btn btn-primary" href="/categories/them">them moi</a>
<table class="table">
    <thead>
        <tr>
            <th>Tên</th>
            <th>Số bài viết</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cate as $category)
        <tr>
            <td>{{$category->name }}</td>
            <td>{{ $category->posts->count()}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection