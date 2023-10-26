@extends('home')
@section('home')
<a class="btn btn-primary" href="/categories/category">list</a>
<h1>Thêm dannh mục</h1>
        <form action="/categories/them" method="post">
            @csrf
            <input type="text" name="name" id="name" placeholder="Tên danh mục">
            <button type="submit" class="btn btn-primary">
                ADD
            </button>
        </form>
@endsection