@extends('layouts.master')

@section('content')
    <section class="content-area" style="transform: none; min-height: 64px;">
        <div class="top_site_main"
             style="color: rgb(255, 255, 255); background-image: url(&quot;https://educationwp.thimpress.com/wp-content/themes/eduma/images/bg-page.jpg&quot;); padding-top: 140px;">
            <div class="page-title-wrapper">
                <div class="banner-wrapper container"><h1>Danh sách khóa học</h1></div>
            </div>
        </div>
        <div class="breadcrumbs-wrapper">
            <div class="container">
                <ul itemprop="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList" id="breadcrumbs"
                    class="breadcrumbs">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                         href="https://educationwp.thimpress.com"
                                                                                                         title="Home"><span
                                    itemprop="name">Home</span></a></li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span
                                itemprop="name" title="Danh sách khóa học">Danh sách khóa học</span></li>
                </ul>
            </div>
        </div>
        <div class="container site-content sidebar-right" style="transform: none;">
            <div class="row" style="transform: none;">
                <main id="main" class="site-main col-sm-9 alignleft">
                    <div id="lp-archive-courses">
                        <div class="thim-course-top switch-layout-container">
                            <div class="thim-course-switch-layout switch-layout"><a href="#"
                                                                                    class="list switchToGrid switch-active"><i
                                            class="fa fa-th-large"></i></a> <a href="#" class="grid switchToList"><i
                                            class="fa fa-list-ul"></i></a></div>
                            <div class="course-index"><span>Showing 1-9 of 18 results</span></div>
                            <div class="courses-searching">
                                <form method="get" action="https://educationwp.thimpress.com/courses/"><input
                                            type="text" value="" name="s" placeholder="Search our courses"
                                            class="form-control course-search-filter" autocomplete="off"> <input
                                            type="hidden" value="course" name="ref">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                    <span class="widget-search-close"></span></form>
                                <ul class="courses-list-search list-unstyled"></ul>
                            </div>
                        </div>
                        <div id="thim-course-archive" class="thim-course-grid" data-cookie="grid-layout">
                            @foreach($subjects as $subject)
                            <div class="course-grid-3 lpr_course post-5428 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-general pmpro-has-access course">
                                @include('subject._subject_list')
                            </div>
                                @endforeach
                        </div>
                        <nav class="learn-press-pagination navigation pagination">
                            {!! $subjects->links()!!}
                        </nav>
                    </div>
                </main>
                @include('_partial.sidebar')
            </div>
        </div>
    </section>
@endsection