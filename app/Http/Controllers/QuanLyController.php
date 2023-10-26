<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\Mans;
class QuanLyController extends Controller
{
    function home(){
        return view('home');
    }
    function index(){
        $post = Posts::all();
        $category = Categories::all();
        return view('posts.index',compact('post','category'));
    }
    function them(){
        return view('posts.update');
    }
    function update(Request $request){
        $data = [
            "title"=>$request->input('title'),
            "content"=>$request->input('content'),
            "category_id"=>$request->input('category_id'),
        ];
        // $tinymce = tinymce_init([
        //     selector: '#content',
        //     plugins: 'advlist autolink lists link image charmap print preview code',
        //     toolbar: 'undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist | link image | code',
        // ]);
        Posts::create($data);
        return redirect()->router('post_index');
    }

    function category(){
        $cate = Categories::all();
        return view('categories.category',compact('cate'));
    }
    function save(Request $request){
        $category = [
            "name"=>$request->input('name'),
        ];
        Categories::create($category);
        return redirect()->router('categories_category');
    }
}
