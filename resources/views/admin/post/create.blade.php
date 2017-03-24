@extends('admin.layouts.master')
@section('content')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tạo bài viết mới</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        @if($errors->count()>0)
                            <div class="col-xs-12 alert alert-warning">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{route('admin.post.postAdd')}}" data-parsley-validate=""
                              enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate="">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tiêu đề: <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="title" id="first-name" required="required"
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label class="control-label col-md-3 col-sm-3 col-xs-12">Chọn danh mục</label>--}}
                                {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                                    {{--<select name="category" class="form-control">--}}
                                        {{--@foreach($categories as $category)--}}
                                            {{--<option value="{{$category->id}}">{{$category->name}}</option>--}}
                                        {{--@endforeach--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="avatar">Ảnh detail <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="avatar" name="avatar" required="required"
                                           class="form-control col-md-7 col-xs-12">
                                    <img id="preview" src="">
                                </div>
                            </div>

                            <div class="form-group">
                                {{--<label class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung</label>--}}
                                <textarea  name="content">{{old('content')}}</textarea>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button class="btn btn-primary" type="button">Hủy</button>
                                    <button class="btn btn-primary" type="reset">Làm lại</button>
                                    <button type="submit" class="btn btn-success">Thêm mới</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('page_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.4/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            height: 450,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            content_css: [
                '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });
    </script>
    <script>

    </script>
@endsection