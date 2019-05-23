@extends('home')
@section('title', 'Chỉnh sửa blog')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chỉnh sửa</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('blogs.update' , $blog->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input type="text" class="form-control" name="title" value="{{ $blog->title }}"  required>
                    </div>
                    <div class="form-group">
                        <label >Tóm tắc</label>
                        <input type="text" class="form-control" name="summary" value="{{ $blog->summary }}"  required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nội dung</label>
                        <textarea  class="form-control" rows="20" cols="70" name="content" value="{{ $blog->content }}" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection 