@extends('admin.layouts.master')
@section('content')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Thêm giảng viên</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        {{--@if($errors->count()>0)--}}
                            {{--<div class="col-xs-12 alert alert-warning">--}}
                                {{--<ul>--}}
                                    {{--@foreach($errors->all() as $error)--}}
                                        {{--<li>{{$error}}</li>--}}
                                    {{--@endforeach--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--@endif--}}
                        <form method="post" action="{{route('admin.instructor.postAdd')}}" data-parsley-validate=""
                              enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate="">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên giảng viên
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="name" id="first-name" required="required"
                                           class="form-control col-md-7 col-xs-12">
                                    @if($errors->has('name'))
                                        <p style="color:red"> {{$errors->first('name')}}</p>
                                    @endif
                                </div>
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label class="control-label col-md-3 col-sm-3 col-xs-12">Chọn danh mục</label>--}}
                                {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                                    {{--<select name="category_id" class="form-control">--}}
                                        {{--@foreach($categories as $category)--}}
                                            {{--<option value="{{$category->id}}">{{$category->name}}</option>--}}
                                        {{--@endforeach--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Chức vụ</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text"
                                           name="job">
                                    @if($errors->has('job'))
                                        <p style="color:red"> {{$errors->first('job')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="avatar">Ảnh <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" id="avatar" name="avatar" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                            </div>

                            <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Whishlist</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text"
                                           name="whishlist">
                                    @if($errors->has('whishlist'))
                                        <p style="color:red"> {{$errors->first('whishlist')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Facebook</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text"
                                           name="facebook">
                                    @if($errors->has('facebook'))
                                        <p style="color:red"> {{$errors->first('facebook')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Twitter</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text"
                                           name="twitter">
                                    @if($errors->has('twitter'))
                                        <p style="color:red"> {{$errors->first('twitter')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Gmail</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text"
                                           name="gmail">
                                    @if($errors->has('gmail'))
                                        <p style="color:red"> {{$errors->first('gmail')}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Youtube</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text"
                                           name="youtube">
                                    @if($errors->has('youtube'))
                                        <p style="color:red"> {{$errors->first('youtube')}}</p>
                                    @endif
                                </div>
                            </div>

                            {{--<div class="form-group">--}}
                            {{--<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Số sinh viên--}}
                            {{--đã ĐK</label>--}}
                            {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                            {{--<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text"--}}
                            {{--name="numberOfEnroll">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group">
                            <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Giới thiệu</label>

                                <label>
                                    <textarea name="description"></textarea>
                                </label>


                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button class="btn btn-primary" type="button">Cancel</button>
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
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
@endsection