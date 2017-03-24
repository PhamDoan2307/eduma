@extends('layouts.master')
{{--@section('title')--}}
    {{--{{$subject->title}}--}}
    {{--@endsection--}}
@section('content')
    <section class="content-area" style="transform: none; min-height: 65px;">
        <div class="top_site_main"
             style="color: rgb(255, 255, 255); background-image: url(&quot;https://educationwp.thimpress.com/wp-content/themes/eduma/images/bg-page.jpg&quot;); padding-top: 140px;">
            <div class="page-title-wrapper">
                <div class="banner-wrapper container"><h2>{{$subject->category->name}}</h2></div>
            </div>
        </div>
        <div class="breadcrumbs-wrapper">
            <div class="container">
                <ul itemprop="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList" id="breadcrumbs"
                    class="breadcrumbs">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                         href="/"
                                                                                                         title="Home"><span
                                    itemprop="name">Trang chủ</span></a></li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                         href="{{route('subject.show')}}"
                                                                                                         title="All courses"><span
                                    itemprop="name">Danh sách khóa học</span></a></li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                         href="https://educationwp.thimpress.com/course-category/general/"
                                                                                                         title="{{$subject->category->name}}"><span
                                    itemprop="name">{{$subject->category->name}}</span></a></li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span
                                itemprop="name" title="{{$subject->name}}">{{$subject->name}}</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container site-content sidebar-right" style="transform: none;">
            <div class="row" style="transform: none;">
                <main id="main" class="site-main col-sm-9 alignleft">
                    <article id="post-5428"
                             class="post-5428 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-general pmpro-has-access course">
                        <div class="entry-content">
                            <div id="lp-single-course" class="learnpress-content learn-press"><h1 class="entry-title"
                                                                                                  itemprop="name">
                                    {{$subject->name}}</h1>
                                <div class="course-meta">
                                    {{--<div class="course-author" itemscope="" itemtype="http://schema.org/Person"><img--}}
                                    {{--alt="Admin bar avatar"--}}
                                    {{--src="https://educationwp.thimpress.com/wp-content/uploads/learn-press-profile/7/9c081444f942cc8fe0ddf55631b584e2.jpg"--}}
                                    {{--class="avatar avatar-40 photo" height="40" width="40">--}}
                                    {{--<div class="author-contain"><label itemprop="jobTitle">Teacher</label>--}}
                                    {{--<div class="value" itemprop="name"><a--}}
                                    {{--href="https://educationwp.thimpress.com/profile/keny/courses/">--}}
                                    {{--Keny White </a></div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="course-categories"><label>Danh mục</label>
                                        <div class="value"><span class="cat-links"><a
                                                        href="{{route('category.show',['slug'=>$subject->category->slug])}}"
                                                        rel="tag">{{$subject->category->name}}</a></span></div>
                                    </div>
                                    {{--<div class="course-review"><label>Review</label>--}}
                                    {{--<div class="value">--}}
                                    {{--<div class="review-stars-rated">--}}
                                    {{--<ul class="review-stars">--}}
                                    {{--<li><span class="fa fa-star-o"></span></li>--}}
                                    {{--<li><span class="fa fa-star-o"></span></li>--}}
                                    {{--<li><span class="fa fa-star-o"></span></li>--}}
                                    {{--<li><span class="fa fa-star-o"></span></li>--}}
                                    {{--<li><span class="fa fa-star-o"></span></li>--}}
                                    {{--</ul>--}}
                                    {{--<ul class="review-stars filled" style="width: 100%">--}}
                                    {{--<li><span class="fa fa-star"></span></li>--}}
                                    {{--<li><span class="fa fa-star"></span></li>--}}
                                    {{--<li><span class="fa fa-star"></span></li>--}}
                                    {{--<li><span class="fa fa-star"></span></li>--}}
                                    {{--<li><span class="fa fa-star"></span></li>--}}
                                    {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<span>(3 reviews)</span></div>--}}
                                    {{--</div>--}}
                                </div>
                                <div class="course-payment">
                                    <div class="course-price" itemprop="offers" itemscope=""
                                         itemtype="http://schema.org/Offer">
                                        <div class="value free-course" itemprop="price"
                                             content="{{$subject->price}}"> {{number_format($subject->price,0,',','.')}}
                                            VNĐ
                                        </div>
                                        <meta itemprop="priceCurrency" content="$">
                                    </div>
                                    <form name="purchase-course" class="purchase-course form-purchase-course"
                                          method="post" enctype="multipart/form-data">
                                        <a href="#register-form"
                                           class="button purchase-button thim-enroll-course-button"
                                           data-block-content="no"> Đăng ký
                                        </a>
                                        <input type="hidden" name="purchase-course" value="5428"></form>
                                </div>
                                <div class="course-thumbnail"><img width="870" height="500"
                                                                   src="../../resources/upload/subject/{{$subject->avatar}}"
                                                                   class="attachment-full size-full wp-post-image"
                                                                   alt="Introduction LearnPress – LMS plugin"
                                    ></div>
                                <div class="course-summary">
                                    <div class="course-landing-summary">
                                        <script type="text/template" id="learn-press-template-curriculum-popup">
                                            <div
                                                    id="course-curriculum-popup" class="sidebar-hide">
                                                <div id="popup-header">
                                                    <div class="courses-searching">
                                                        <input type="text" value="" name="s"
                                                               placeholder="Search courses"
                                                               class="thim-s form-control courses-search-input"
                                                               autocomplete="off"/>
                                                        <input type="hidden" value="course" name="ref"/>
                                                        <button type="submit"><i class="fa fa-search"></i></button>
                                                        <span class="widget-search-close"></span>
                                                        <ul class="courses-list-search"></ul>
                                                    </div>
                                                    <a class="popup-close"><i class="fa fa-close"></i></a>
                                                </div>
                                                <div id="popup-main">
                                                    <div id="popup-content">
                                                        <div id="popup-content-inner">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="popup-sidebar">
                                                    <nav class="thim-font-heading learn-press-breadcrumb"
                                                         itemprop="breadcrumb"><a
                                                                href="https://educationwp.thimpress.com/courses/">Courses</a><i
                                                                class="fa-angle-right fa"></i><a
                                                                href="https://educationwp.thimpress.com/course-category/general/">General</a><i
                                                                class="fa-angle-right fa"></i><span class="item-name">Introduction LearnPress &#8211; LMS plugin</span>
                                                    </nav>
                                                </div>
                                            </div></script>
                                        <script type="text/template" id="learn-press-template-course-prev-item">
                                            <div
                                                    class="course-content-lesson-nav course-item-prev prev-item">
                                                <a class="footer-control prev-item button-load-item"
                                                   data-id="@{{data.id}}"
                                                   href="@{{data.url}}">@{{data.title}}</a>
                                            </div></script>
                                        <script type="text/template" id="learn-press-template-course-next-item">
                                            <div
                                                    class="course-content-lesson-nav course-item-next next-item">
                                                <a class="footer-control next-item button-load-item"
                                                   data-id="@{{data.id}}"
                                                   href="@{{data.url}}">@{{data.title}}</a>
                                            </div></script>
                                        <script type="text/template" id="learn-press-template-block-content">
                                            <div
                                                    id="learn-press-block-content" class="popup-block-content">
                                                <div class="thim-box-loading-container">
                                                    <div class="cssload-container">
                                                        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
                                                    </div>
                                                </div>
                                            </div></script>
                                    </div>
                                    <div id="course-landing">
                                        <div class="course-tabs">
                                            <ul class="nav nav-tabs">
                                                <li class="active thim-col-4">
                                                    <a href="#tab-course-description" data-toggle="tab">
                                                        <i class="fa fa-bookmark"></i>
                                                        <span>Chi tiết khóa học</span>
                                                    </a>
                                                </li>
                                                <li class=" thim-col-4"><a href="#tab-course-curriculum"
                                                                           data-toggle="tab">
                                                        <i class="fa fa-bookmark"></i>
                                                        <span>Chương trình giảng dạy</span>
                                                    </a>
                                                </li>
                                                <li class=" thim-col-4">
                                                    <a href="#tab-course-instructor" data-toggle="tab">
                                                        <i class="fa fa-bookmark"></i>
                                                        <span>Giảng viên</span>
                                                    </a>
                                                </li>
                                                <li class=" thim-col-4"><a href="#tab-course-review" data-toggle="tab">
                                                        <i class="fa fa-bookmark"></i>
                                                        <span>Đánh giá</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-course-description">
                                                    <div class="thim-course-content">
                                                        {{--{{$des->level}}--}}
                                                        {!!$description->description!!}
                                                        <span class="cp-load-after-post"></span></div>
                                                    <div class="thim-course-info"><h3 class="title">Tính năng khóa
                                                            học</h3>
                                                        <ul>
                                                            <li class="lectures-feature"><i class="fa fa-files-o"></i>
                                                                <span class="label">Bài giảng</span> <span
                                                                        class="value">{{$total}}</span>
                                                            </li>
                                                            <li class="quizzes-feature"><i
                                                                        class="fa fa-puzzle-piece"></i> <span
                                                                        class="label">Trắc nghiệm</span> <span
                                                                        class="value">1</span></li>
                                                            <li class="duration-feature"><i class="fa fa-clock-o"></i>
                                                                <span class="label">Tổng thời lượng</span> <span
                                                                        class="value">{{$description->total_duration}}
                                                                    giờ</span>
                                                            </li>
                                                            <li class="skill-feature"><i class="fa fa-level-up"></i>
                                                                <span class="label">Kỹ năng</span> <span
                                                                        class="value">{{$description->level}}</span>
                                                            </li>
                                                            <li class="language-feature"><i class="fa fa-language"></i>
                                                                <span class="label">Ngôn ngữ</span> <span
                                                                        class="value">{{$description->language}}</span>
                                                            </li>
                                                            <li class="students-feature"><i class="fa fa-users"></i>
                                                                <span class="label">Số lượng học sinh</span> <span
                                                                        class="value">347</span>
                                                            </li>
                                                            <li class="assessments-feature"><i
                                                                        class="fa fa-check-square-o"></i> <span
                                                                        class="label">Assessments</span> <span
                                                                        class="value">Self</span></li>
                                                        </ul>
                                                    </div>
                                                    <ul class="thim-social-share">
                                                        <li class="heading">Share:</li>
                                                        <li>
                                                            <div class="facebook-social"><a target="_blank"
                                                                                            class="facebook"
                                                                                            href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Feducationwp.thimpress.com%2Fcourses%2Flearnpress-101%2F"
                                                                                            title="Facebook"><i
                                                                            class="fa fa-facebook"></i></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="googleplus-social"><a target="_blank"
                                                                                              class="googleplus"
                                                                                              href="https://plus.google.com/share?url=https%3A%2F%2Feducationwp.thimpress.com%2Fcourses%2Flearnpress-101%2F&amp;title=Introduction%20LearnPress%20%26%238211%3B%20LMS%20plugin"
                                                                                              title="Google Plus"
                                                                                              onclick="javascript:window.open(this.href, &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;"><i
                                                                            class="fa fa-google"></i></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="twitter-social"><a target="_blank"
                                                                                           class="twitter"
                                                                                           href="https://twitter.com/share?url=https%3A%2F%2Feducationwp.thimpress.com%2Fcourses%2Flearnpress-101%2F&amp;text=Introduction%20LearnPress%20%26%238211%3B%20LMS%20plugin"
                                                                                           title="Twitter"><i
                                                                            class="fa fa-twitter"></i></a></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" id="tab-course-curriculum">
                                                    <div class="course-curriculum" id="learn-press-course-curriculum">
                                                        <div class="thim-curriculum-buttons"></div>
                                                        <ul class="curriculum-sections">
                                                            <li class="section" id="section-206" data-id="206"><h4
                                                                        class="section-header"><span
                                                                            class="collapse"></span> Nội dung khóa
                                                                    học <span class="meta"> <span
                                                                                class="step">0/{{$total}}</span> </span>
                                                                </h4>
                                                                <ul class="section-content">
                                                                    @foreach($curr as $cur)
                                                                        <li class="course-lesson course-item course-item-5429 free-item preview-item viewable"
                                                                            data-type="lp_lesson">
                                                                            <div class="meta-left"><span
                                                                                        class="course-format-icon"><i
                                                                                            class="fa fa-play-circle"></i></span>
                                                                                <div class="index"><span class="label">Buổi</span>{{$cur->order}}
                                                                                </div>
                                                                            </div>
                                                                            <div class="meta-center has-right"><a
                                                                                        class="lesson-title course-item-title button-load-item"
                                                                                        target="_blank"
                                                                                        href="javascript:void(0);"
                                                                                        data-id="5429"
                                                                                        data-complete-nonce="e5616dc3b0">{{$cur->title}}</a>
                                                                                <div class="completed-button"><i
                                                                                            class="fa fa-check"></i>
                                                                                </div>
                                                                                <a class="lesson-preview button-load-item"
                                                                                   href="javascript:void(0);"
                                                                                   data-id="5429"
                                                                                   data-complete-nonce="e5616dc3b0">Hot</a>
                                                                            </div>
                                                                            <div class="meta">{{$cur->duration}}phút
                                                                            </div>
                                                                        </li>
                                                                    @endforeach

                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-course-instructor">
                                                    {{--{{$instruct}}--}}
                                                    @foreach($instruct as $i)
                                                        {{--{{$i->name}}--}}
                                                        <div class="thim-about-author">
                                                            <div class="author-wrapper">
                                                                <div class="author-avatar"><img alt=""
                                                                                                src="../resources/upload/{{$i->avatar}}"
                                                                                                class="avatar avatar-110 photo"
                                                                                                height="110"
                                                                                                width="110">
                                                                </div>
                                                                <div class="author-bio">
                                                                    <div class="author-top"><a class="name"
                                                                                               href="https://educationwp.thimpress.com/profile/keny/courses/">
                                                                            {!! $i->name !!} </a>
                                                                        <p class="job">{{$i->job}}</p></div>
                                                                    <ul class="thim-author-social">
                                                                        <li>
                                                                            <a href="{{$i->facebook}}"
                                                                               class="facebook"><i
                                                                                        class="fa fa-facebook"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{$i->facebook}}"
                                                                               class="twitter"><i
                                                                                        class="fa fa-twitter"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{$i->facebook}}"
                                                                               class="google-plus"><i
                                                                                        class="fa fa-google-plus"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{$i->facebook}}"
                                                                               class="linkedin"><i
                                                                                        class="fa fa-linkedin"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{$i->facebook}}"
                                                                               class="youtube"><i
                                                                                        class="fa fa-youtube"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="author-description">{!! $i->description !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="tab-pane" id="tab-course-review">
                                                    <div class="course-rating"><h3>Đánh giá</h3>
                                                        <div class="average-rating" itemprop="aggregateRating"
                                                             itemscope="" itemtype="http://schema.org/AggregateRating">
                                                            <p class="rating-title">Điểm đánh giá</p>

                                                            <div class="rating-box">
                                                                <div class="average-value" itemprop="ratingValue">{{$review->star}}
                                                                </div>
                                                                <div class="rateit" data-rateit-value="{{$review->star}}"  data-rateit-readonly="true"></div>
                                                                <div class="review-amount" itemprop="ratingCount"> {{$review->total}}
                                                                    đánh giá
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="course-review">
                                                        <div id="course-reviews" class="content-review">
                                                            <div class="fb-comments"
                                                                 data-href="{{route('subject.show',['slug'=>$slug])}}"
                                                                 data-numposts="5">

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="thim-course-menu-landing">
                                                <div class="container">
                                                    <ul class="thim-course-landing-tab">
                                                        <li class="active"><a href="#tab-course-description">Chi tiết
                                                                khóa
                                                                học</a>
                                                        </li>
                                                        <li><a href="#tab-course-curriculum">Chương trình giảng dạy</a>
                                                        </li>
                                                        <li><a href="#tab-course-instructor">Giảng viên</a></li>
                                                        <li><a href="#tab-course-review">Đánh giá</a></li>
                                                    </ul>
                                                    <div class="thim-course-landing-button">
                                                        <div class="course-price" itemprop="offers" itemscope=""
                                                             itemtype="http://schema.org/Offer">
                                                            <div class="value free-course" itemprop="price"
                                                                 content="{{$subject->price}}">
                                                                {{number_format($subject->price,0,',','.')}} VNĐ
                                                            </div>
                                                            <meta itemprop="priceCurrency" content="$">
                                                        </div>
                                                        <form name="purchase-course"
                                                              class="purchase-course form-purchase-course" method="post"
                                                              enctype="multipart/form-data">
                                                            <a href="#register-form"
                                                               class="button purchase-button thim-enroll-course-button"
                                                               data-block-content="no"> Đăng ký
                                                            </a>
                                                            <input type="hidden" name="purchase-course" value="5428">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-grid-cell" id="register-form">
                                        <div class="so-panel widget widget_heading panel-first-child"
                                             id="panel-87-0-2-0" data-index="4">
                                            <div class="panel-widget-style">
                                                <div class="thim-widget-heading thim-widget-heading-base">
                                                    <div class="sc_heading text-left"><h3 class="title">Đăng ký </h3>
                                                        @if($errors->count()>0)
                                                            <div class="alert alert-warning">
                                                                @foreach($errors->all() as $error)
                                                                    <ul>
                                                                        <li>{{$error}}</li>
                                                                    </ul>
                                                                @endforeach
                                                            </div>
                                                        @elseif(!empty(session('success')))
                                                            <div class="alert alert-success">
                                                                {{session('success')}}
                                                            </div>
                                                        @endif
                                                        <span class="line"></span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="so-panel widget widget_text panel-last-child" id="register-panel"
                                             data-index="5">
                                            <div class="textwidget">
                                                <div role="form" class="wpcf7" id="wpcf7-f4-p87-o3" lang="en-US"
                                                     dir="ltr">
                                                    <div class="screen-reader-response"></div>
                                                    <form method="post" action="{{route('subject.store')}}"
                                                          class="wpcf7-form" novalidate="novalidate">
                                                        {{csrf_field()}}
                                                        <p><span class="wpcf7-form-control-wrap your-name"><input
                                                                        type="text" name="name" value="" size="40"
                                                                        class="wpcf7-form-control wpcf7-text "
                                                                        aria-required="true" aria-invalid="false"
                                                                        placeholder="Họ tên *" required></span></p>
                                                        <p><span class="wpcf7-form-control-wrap your-email"><input
                                                                        type="email" name="email" value=""
                                                                        size="40"
                                                                        class="wpcf7-form-control wpcf7-text wpcf7-email "
                                                                        aria-required="true" aria-invalid="false"
                                                                        placeholder="Email *" required></span></p>
                                                        <p><span class="wpcf7-form-control-wrap"><input
                                                                        type="number" name="number" value=""
                                                                        size="40"
                                                                        class="wpcf7-form-control wpcf7-text wpcf7-email "
                                                                        aria-required="true" aria-invalid="false"
                                                                        placeholder="Số điện thoại *" required></span>
                                                        </p>
                                                        <p><span class="wpcf7-form-control-wrap your-subject"><input
                                                                        type="hidden" name="subject"
                                                                        value="{{$subject->id}}"
                                                                        size="40"
                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                        aria-required="true" aria-invalid="false"
                                                                        placeholder="Subject *" required></span></p>
                                                        <p><span class="wpcf7-form-control-wrap your-message"><textarea
                                                                        name="message" cols="40" rows="10"
                                                                        class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                        aria-required="true" aria-invalid="false"
                                                                        placeholder="Message *"></textarea></span></p>
                                                        <p><input type="submit" value="Đăng ký"
                                                                  class="submit-btn"></p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thim-ralated-course"><h3 class="related-title">Khóa học liên quan</h3>
                                        <div class="thim-course-grid">
                                            @foreach($related_subjects as $subject)
                                                <article class="course-grid-3 lpr_course">
                                                    @include('subject._subject')
                                                </article>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </article>
                </main>
                @include('_partial.sidebar')
            </div>
        </div>
    </section>
@endsection