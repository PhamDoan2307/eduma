@extends('admin.layouts.master')

@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div id="edit_category_form" class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Cài Đặt Seo</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <form action="{{route('admin.option.postAdd')}}" method="post" data-parsley-validate=""
                              class="form-horizontal form-label-left" novalidate="">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title index
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="{{!empty($temp=$options->where('name','title_index')->first())?$temp->value:''}}"
                                           type="text" id="first-name" name="title_index" required="required"
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                       for="first-name">Description<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="{{!empty($temp=$options->where('name','description')->first())?$temp->value:''}}"
                                           type="text" id="first-name" name="description" required="required"
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                       for="first-name">Số điện thoại<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="{{cache('phone_number')}}"
                                           type="number" id="first-name" name="phone_number" required="required"
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                       for="first-name">Email<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="{{cache('email')}}"
                                           type="text" id="first-name" name="email" required="required"
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
        </div>
    </div>
@endsection