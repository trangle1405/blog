@extends('home')
@section('title', 'BLog')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>Blog</h1></div>
            <div>
                <a class="btn btn-primary" href="{{ route('blogs.create') }}">Thêm mới</a>
            </div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <div>
                @if(count($blogs) == 0)
                    <p colspan="4">Không có dữ liệu</p>w
                @else
                    @foreach ($blogs as $key => $blog):
                    <li>
                        <h2><a href="">{{$blog->title}}</a></h2>
                        <p>{{$blog->updated_at}}</p>
                        <p>{{$blog->summary}}</p>
                        <a href="{{ route('blogs.edit', $blog->id) }} ">Update</a>
                        <a href="{{ route('blogs.destroy', $blog->id) }}" class="text-danger"
                           onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>
                    </li>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
@endsection
