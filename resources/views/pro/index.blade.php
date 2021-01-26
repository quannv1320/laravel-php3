@extends('layouts.main')
    
@section('content')
    <form action="" method="get">
        {{-- <input type="text" class="form-control" placeholder="search" name="keyword" value="{{ $keyword }}"> --}}
    </form>

    <table class="table">
        <thead>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Danh mục</th>
            <th>Ảnh</th>
            <th>Doanh số</th>
            <th>
                <a class="btn btn-success" href="">Tạo mới</a>
            </th>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->category->name}}</td>
                <td>
                    <img src="{{asset($product->image)}}" width="70">
                </td>
                <td>
                    {{ $product->orderDetail->quantity }}
                </td>
                <td>
                    <a class="btn btn-primary" href="">Sửa</a>
                    <a class="btn btn-danger" href="{{route('pro.remove', ['id' => $product->id])}}">Xóa</a>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="5">{{ $products -> links() }}</td>
            </tr>
        </tbody>
    </table>
@endsection
