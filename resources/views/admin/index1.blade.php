@extends('admin.layouts.master')

@section('content')
    <div class="right_col" role="main">
        <div class="row">

            <div id="add_category_form" class="col-md-12 col-sm-12 col-xs-12 hide">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Danh sách đăng ký</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>

                    </div>
                </div>
            </div>
            <div class=" col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Danh sách đăng ký</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên</th>
                                <th>Thông tin liên lạc</th>
                                <th>Message</th>
                                <th>Ngày</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($enrolls as $enroll)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$enroll->name}}</td>
                                    <td>
                                        <span class="label label-success">{{$enroll->phone_number}}</span>
                                        <span class="label label-success">{{$enroll->email}}</span>
                                    </td>
                                    <td>{{$enroll->message}}</td>
                                    <td>{{$enroll->created_at}}</td>
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

@endsection