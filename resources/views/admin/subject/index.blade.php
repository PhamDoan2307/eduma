@extends('admin.layouts.master')
@section('title')
    Danh sách khóa học
@endsection
@section('content')
    <div class="right_col" role="main">

        <div class="row">
            <div class="col-xs-12">
                @if(Session::has('success'))
                    <div id="error" class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>{!! Session::get('success') !!}</strong>
                    </div>
                @endif
                <a href="{{route('admin.subjects.getAdd')}}" id="add_category" class="btn btn-primary">Thêm khóa
                    học</a>
            </div>

            <div class=" col-xs-12">

                <div class="x_panel">
                    <div class="x_title">
                        <h2>Danh sách khóa học</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ảnh mô tả</th>
                                <th>Tên</th>
                                <th>Danh mục</th>
                                <th>Học phí</th>
                                <th>Edit</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subjects as $subject)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td><img width="120" height="120" src="{{url('../resources/upload/subject/'.$subject->avatar)}}">
                                    </td>
                                    <td><a href="#signup" id="{{$subject->id}}" class="show_detail" data-toggle="modal"
                                           data-target=".bs-modal-sm">{{$subject->name}}</a></td>
                                    <td>{{$subject->category->name}}</td>
                                    <td>{{number_format($subject->price,0,',','.')}} VNĐ</td>
                                    <td><a href="{{route('admin.subjects.postEdit',['id'=>$subject->id])}}"
                                           class="btn btn-default">Sửa</a></td>
                                    <td><a href="{{route('admin.subjects.postEdit',['id'=>$subject->id])}}"
                                           class="btn btn-default">Xóa</a></td>
                                    {{--<td><button class="show_detail" id="{{$subject->id}}">Test</button></td>--}}

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                {!! $subjects->links()!!}
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade bs-modal-sm modal-edit" id="myModal" tabindex="-1" role="dialog"
         aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 80%">
            <div class="modal-content">
                <br>
                <div class="bs-example bs-example-tabs">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#signin" data-toggle="tab">Thông tin chung</a></li>
                        <li class=""><a href="#signup" data-toggle="tab">Mô tả</a></li>
                        <li class=""><a href="#why" data-toggle="tab">Danh sách bài học</a></li>
                        <li class=""><a href="#why" data-toggle="tab">Đánh giá</a></li>
                    </ul>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <center>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </center>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('page_script')
@endsection