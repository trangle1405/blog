<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use http\Env\Response;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{


    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.list', compact('blogs'));
    }


    public function create()
    {
        return view('blogs.create');
    }


    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->summary = $request->input('summary');
        $blog->content = $request->input('content');
        $blog->updated_at = date('Y-m-d H:i:s');
        $blog->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới thành công');
        //tao moi xong quay ve trang danh sach blog
        return redirect()->route('blogs.index');
    }


    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }


    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->title = $request->input('title');
        $blog->summary = $request->input('summary');
        $blog->content = $request->input('content');
        $blog->updated_at = date('Y-m-d H:i:s');
        $blog->save();


        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật thành công');
        //tao moi xong quay ve trang danh sach blog
        return redirect()->route('blogs.index');
    }


    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa thành công');
        //xoa xong quay ve trang danh sach task
        return redirect()->route('blogs.index');
    }
}
