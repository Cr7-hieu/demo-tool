@extends('home')
@section('home')
    <a class="btn btn-primary" href="/post/index">list</a>
    <h2>thêm bài viết</h2>
    
    <form method="POST" action="/post/them">
        @csrf
        <input type="text" name="title" id="title" placeholder="Tiêu đề">
        <div id="content" class="tinymce" name="content" rows="10" cols="50">
            (Please incorporate images when they enhance the content.)
            (Image sent)
        </div>
        <select name="category_id">
        @foreach($category as $them)
            <option value="{{ $them->id }}">{{ $them->name }}</option>
        @endforeach
        </select>
        <button type="submit" class="btn btn-primary">ADD</button>
    </form>
    
<script>
    // Truy cập đối tượng TinyMCE
    var tinymce = window.tinymce;

    // Khởi tạo trình soạn thảo TinyMCE
    tinymce.init({
        selector: '#content',
        plugins: 'advlist autolink lists link image charmap print preview code',
        toolbar: 'undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist | link image | code',
    });
</script>
@endsection
