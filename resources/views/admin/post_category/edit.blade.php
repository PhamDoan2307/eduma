@extends('admin.layouts.master')

@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div id="edit_category_form" class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Sửa category {{$category->name}}</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <form action="{{route('post-categories.update',['id'=>$category->id])}}" method="post"
                              data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                            {!! csrf_field() !!}
                            {!! method_field('PUT') !!}
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên
                                    category<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="{{$category->name}}" type="text" id="first-name" name="name"
                                           required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slug<span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="{{$category->slug}}" type="text" id="first-name" name="slug"
                                           required="required" class="form-control col-md-7 col-xs-12">
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
        </div>
    </div>
@endsection