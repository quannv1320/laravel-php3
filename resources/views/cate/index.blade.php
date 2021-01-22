@extends('layouts.main')
    

@section('content')
    <form action="" method="get">
        <input type="text" class="form-control" placeholder="search" name="keyword" value="{{ $keyword }}">
    </form>
    {{ $globalName }}
    <br>
    {{ $composerVariable }}
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Miêu tả</th>
            <th>
                <a class="btn btn-success" href="{{ route('cate.add') }}">Tạo mới</a>
            </th>
        </thead>
        <tbody>
            @foreach($cates as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->detail}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('cate.edit', ['id' => $item->id])}}">Sửa</a>
                    <a class="btn btn-danger" href="{{route('cate.remove', ['id' => $item->id])}}">Xóa</a>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="5">{{ $cates -> links() }}</td>
            </tr>
        </tbody>
    </table>
@endsection
