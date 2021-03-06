<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />


        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>\
                <ul class="nav side-menu">
                    <li><a href="{{route('admin.index')}}"><i class="fa fa-home"></i> Home </a>
                    <li><a href="{{route('admin.option.index')}}"><i class="fa fa-home"></i> Seo </a>

                    </li>
                    <li><a><i class="fa fa-edit"></i> Khóa học <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.subjects.getAdd')}}">Thêm khóa học</a></li>
                            <li><a href="{{route('admin.subjects.getList')}}">Danh sách</a></li>
                            <li><a href="{{route('admin.category.getList')}}">Phân loại khóa học</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Quản lý Blog <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.post.getAdd')}}">Thêm bài viết</a></li>
                            <li><a href="{{route('admin.post.getList')}}">Danh sách bài viết</a></li>
                            {{--<li><a href="{{route('admin.post-category.getList')}}">Phân loại bài viết</a></li>--}}
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Quản lý Giảng viên <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.instructor.getAdd')}}">Thêm giảng viên</a></li>
                            <li><a href="{{route('admin.instructor.getList')}}">Danh sách giảng viên</a></li>
                            {{--<li><a href="{{route('admin.post-category.getList')}}">Phân loại bài viết</a></li>--}}
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>