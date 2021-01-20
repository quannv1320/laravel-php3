<table class="table">
    <thead>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Miêu tả</th>
        <th>
            <a class="btn btn-success" href="">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        @foreach($products as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->description}}</td>
            <td>
                <a class="btn btn-primary" href="">Sửa</a>
                {{-- <a class="btn btn-danger" href="{{route('cate.remove', ['id' => $item->id])}}">Xóa</a> --}}
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="5">{{ $products -> links() }}</td>
        </tr>
    </tbody>
</table>