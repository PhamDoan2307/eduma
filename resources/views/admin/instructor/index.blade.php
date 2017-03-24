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
                <a href="{{route('admin.instructor.getAdd')}}" id="add_category" class="btn btn-primary">Thêm giảng viên</a>
            </div>
            <div class=" col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Danh sách giảng viên</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>STT</th>
                                {{--<th>Avatar</th>--}}
                                <th>Tên</th>
                                <th>Chức vị</th>
                                <th>Edit</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($instructors as $instructor)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    {{--<td><img width="120" height="120" src="/images/subject/450450/{{$subject->avatar}}">--}}
                                    {{--</td>--}}
                                    <td>{{$instructor->name}}</td>
                                    <td>{{$instructor->job}}</td>
                                    <td><a href="{{route('admin.subjects.postEdit',['id'=>$instructor->id])}}"
                                           class="btn btn-default">Edit</a></td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                {!! $instructors->links()!!}
            </div>
        </div>
    </div>
@endsection
@section('page_script')
@endsection