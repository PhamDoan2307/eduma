@extends('admin.layouts.master')

@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-xs-12">
                <a href="{{route('admin.post.postAdd')}}" id="add_category" class="btn btn-primary">Thêm khóa học</a>
            </div>

            <div class=" col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Danh sách Bài viết</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Avatar</th>
                                <th>Title</th>
                                {{--<th>Category</th>--}}
                                <th>Edit</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $subject)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td><img width="120" height="120" src="{{url('../resources/upload/post/'.$subject->avatar)}}">
                                    </td>
                                    <td>{{$subject->title}}</td>
                                    {{--<td>{{$subject->post_category->name}}</td>--}}
                                    <td><a href="{{route('admin.post.getEdit',['id'=>$subject->id])}}"
                                           class="btn btn-default">Edit</a></td>
                                    <td><a href="{{route('admin.post.delete',['id'=>$subject->id])}}"
                                           class="btn btn-default">Xóa</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                {!! $posts->links()!!}
            </div>
        </div>
    </div>
@endsection

@section('page_script')

@endsection