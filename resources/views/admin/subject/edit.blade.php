@extends('admin.layouts.master')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Wizards</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Wizards
                                <small>Sessions</small>
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">


                            <!-- Smart Wizard -->
                            <div id="wizard" class="form_wizard wizard_horizontal">
                                <ul class="wizard_steps">
                                    <li>
                                        <a href="#step-1">
                                            <span class="step_no">1</span><span
                                                    class="step_descr">Thông tin chung</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-2">
                                            <span class="step_no">2</span><span class="step_descr">Mô tả khóa học</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-3">
                                            <span class="step_no">3</span><span class="step_descr">Chương trình giảng dạy</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-4">
                                            <span class="step_no">4</span><span class="step_descr">Đánh giá</span>
                                        </a>
                                    </li>
                                </ul>
                                <form method="post" action="{{route('admin.subjects.postEdit',$subject->id)}}"
                                      data-parsley-validate=""
                                      enctype="multipart/form-data" class="form-horizontal form-label-left"
                                      novalidate="">
                                    <div id="step-1">
                                        <h2 class="StepTitle">Thông tin chung</h2>
                                        {!! csrf_field() !!}
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên
                                                khóa học
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="name" id="first-name" value="{!! $subject->name !!}" required="required"
                                                       class="form-control col-md-7 col-xs-12">
                                                @if($errors->has('name'))
                                                    <p style="color:red"> {{$errors->first('name')}}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ảnh hiện tại
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <img style="height: 200px;width: 300px" src="/test/resources/upload/subject/{{$subject->avatar}}">
                                            </div>
                                            <input type="hidden" name="img_current" value="{{$subject->avatar}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name"
                                                   class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                                       type="file"
                                                       name="avatar">
                                                @if($errors->has('avatar'))
                                                    <p style="color:red"> {{$errors->first('avatar')}}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-ms-3 col-xs-12" for="instructor">Chọn
                                                giảng
                                                viên</label>
                                            {{--@foreach($subjectInstructors as $id)--}}
                                                {{--{{$i}}--}}
                                                {{--@endforeach--}}
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="select2_multiple form-control" multiple="multiple"
                                                        name="instructor[]">
                                                    @foreach($instructors as $instructor)
                                                                <option value="{{$instructor->id}}"
                                                                @foreach($subjectInstructors as $i)
                                                                    @if($i->id==$instructor->id)
                                                                        {{"selected"}}
                                                                            @endif
                                                                        @endforeach >
                                                                    {{$instructor->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Chọn danh
                                                mục</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select name="category_id" class="form-control">
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" @if($subject->category_id==$category->id) {{"selected"}} @endif>{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name"
                                                   class="control-label col-md-3 col-sm-3 col-xs-12">Học
                                                phí</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                                     value="{{$subject->price}}"  type="text"
                                                       name="price">
                                                @if($errors->has('price'))
                                                    <p style="color:red"> {{$errors->first('price')}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-2">
                                        <h2 class="StepTitle">Step 2 Content</h2>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ngôn
                                                ngữ giảng dạy
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="language" id="first-name" required="required" value="{!! $description->language !!}"
                                                       class="form-control col-md-7 col-xs-12">
                                                @if($errors->has('language'))
                                                    <p style="color:red"> {{$errors->first('language')}}</p>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cấp
                                                độ
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="level" id="first-name" required="required" value="{!! $description->level !!}"
                                                       class="form-control col-md-7 col-xs-12">
                                                @if($errors->has('level'))
                                                    <p style="color:red"> {{$errors->first('level')}}</p>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Thời
                                                lượng khóa
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="total_duration" id="first-name" value="{!! $description->total_duration !!}"
                                                       required="required"
                                                       class="form-control col-md-7 col-xs-12">
                                                @if($errors->has('total_duration'))
                                                    <p style="color:red"> {{$errors->first('total_duration')}}</p>
                                                @endif
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                   for="first-name">Mô tả khóa học
                                                <span class="required">*</span>
                                            </label>
                                            <textarea name="description" id="description">{{$description->description}}</textarea>
                                        </div>
                                    </div>
                                    <div id="step-3">
                                        <h2 class="StepTitle">Step 3 Content</h2>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                   for="first-name">Chọn số bài viết
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control" id="number2" name="number1">
                                                    <option></option>
                                                    @for($i=1;$i<=20;$i++)

                                                        <option value="{{$i}}">{{$i}} bài</option>
                                                    @endfor
                                                </select>
                                            </div>

                                        </div>
                                        @foreach($curr as $value)
                                            <div class="ln_solid"></div>
                                            <h2 class="StepTitle">Bài {{$value->order}}</h2>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                       for="first-name">Bài số {{$value->order}}:
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" name="order[]" id="first-name"
                                                         value="{{$value->order}}"  required="required" disabled
                                                           class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                       for="first-name">Tên bài {{$value->order}}:
                                                    <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" name="title[{{$value->id}}]" id="first-name"
                                                         value="{{$value->title}}"  required="required"
                                                           class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                        <input type="hidden" name="idCurr[]" value="{{$value->id}}">
                                            <div class="form-group">
                                                <label for="middle-name"
                                                           class="control-label col-md-3 col-sm-3 col-xs-12">Thời lượng bài {{$value->order}}</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                                        value="{!! $value->duration !!}"   type="text"
                                                           name="duration[{{$value->id}}]">
                                                </div>
                                            </div>
                                        @endforeach
                                        <input type="hidden" name="countCurr" id="countCurr" value="{{$curr->count()}}">
                                        <div class="curriculum">
                                            {{--@include('admin.subject.curriculum')--}}
                                        </div>


                                    </div>
                                    <div id="step-4">
                                        <h2 class="StepTitle">Nội dung đánh giá</h2>
                                        {!! csrf_field() !!}
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Đánh giá
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="star" id="first-name" required="required" value="{{$review->star}}"
                                                       class="form-control col-md-7 col-xs-12">
                                                @if($errors->has('star'))
                                                    <p style="color:red"> {{$errors->first('star')}}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name"
                                                   class="control-label col-md-3 col-sm-3 col-xs-12">Tổng</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="middle-name" class="form-control col-md-7 col-xs-12"
                                                       type="text" value="{{$review->total}}"
                                                       name="total">
                                                @if($errors->has('total'))
                                                    <p style="color:red"> {{$errors->first('total')}}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button class="btn btn-primary" type="button">Cancel</button>
                                                <button class="btn btn-primary" type="reset">Reset</button>
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End SmartWizard Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

