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
                <textarea id="detail" name="detail" class="form-control my-editor">{{ old('detail') }}</textarea>
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


    <script src="/path-to-your-tinymce/tinymce.min.js"></script>
    {{-- <textarea name="content" class="form-control my-editor">{!! old('content', $content) !!}</textarea> --}}
    <script>
      var editor_config = {
        path_absolute : "/",
        selector: 'textarea.my-editor',
        relative_urls: false,
        plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table directionality",
          "emoticons template paste textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        file_picker_callback : function(callback, value, meta) {
          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
    
          var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
          if (meta.filetype == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }
    
          tinyMCE.activeEditor.windowManager.openUrl({
            url : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no",
            onMessage: (api, message) => {
              callback(message.detail);
            }
          });
        }
      };
    
      tinymce.init(editor_config);
    </script>





@endsection


