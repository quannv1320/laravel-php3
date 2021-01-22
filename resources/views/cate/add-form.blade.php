@extends('layouts.main')

@section('content')
<h3>Thêm mới danh mục</h3>

{{-- validate --}}
{{-- <ul>
    @if (count($errors) > 0)
        @foreach ($errors->all() as $err)
            <li class="text-danger">{{ $err }}</li>
        @endforeach
    @endif
</ul> --}}

    <div class="col-md-6 offset-md-3">
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea name="detail" class="form-control">{{ old('detail') }}</textarea>
                @if ($errors->has('detail'))
                    <span class="text-danger">{{ $errors->first('detail')}}</span>
                @endif
            </div>
            <div class="text-center">
                <button class="btn btn-success" type="submit">Tạo mới</button>
                <a href="{{ route('cate.index') }}" class="btn btn-warning">Hủy</a>
            </div>
        </form>
    </div>
@endsection