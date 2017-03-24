@extends('admin.layouts.master')

@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-xs-12">
                <button id="add_category" class="btn btn-primary">Thêm category</button>
            </div>
            <div id="add_category_form" class="col-md-12 col-sm-12 col-xs-12 hide">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Thêm category</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <form action="{{route('admin.category.postAdd')}}" method="post" data-parsley-validate=""
                              class="form-horizontal form-label-left" novalidate="">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên
                                    category<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="name" required="required"
                                           class="form-control col-md-7 col-xs-12">
                                    @if($errors->has('name'))
                                        {{$errors->first('name')}}
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slug<span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="slug" required="required"
                                           class="form-control col-md-7 col-xs-12">
                                </div>
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
            <div class=" col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Danh sách categories</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên category</th>
                                <th>Slug</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td><a href="{{route('admin.category.getEdit',['id'=>$category->id])}}"
                                           class="btn btn-default">Edit</a></td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_script')
    <script>
        $('#add_category').click(function () {
            $('#add_category_form').toggleClass('hide');
        });
    </script>
@endsection