@extends('home')
@section('title', 'Thêm mới')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới </h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('blogs.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input type="text" class="form-control" name="title"  placeholder="nhập tiêu đề" required>
                    </div>
                    <div class="form-group">
                        <label >Tóm tắc</label>
                        <input type="text" class="form-control" name="summary" placeholder="nhập tóm tắc" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nội dung</label>
                        <textarea name="content" class="form-control" rows="20" cols="70" placeholder="Nhập nội dung"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection 