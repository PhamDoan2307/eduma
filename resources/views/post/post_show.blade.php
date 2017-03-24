@extends('layouts.master')
@section('content')
    <section class="content-area" style="transform: none; min-height: 64px;">
        <div class="top_site_main"
             style="color: rgb(255, 255, 255); background-image: url(&quot;https://educationwp.thimpress.com/wp-content/themes/eduma/images/bg-page.jpg&quot;); padding-top: 140px;">
            <div class="page-title-wrapper">
                <div class="banner-wrapper container"><h2>{{$post->title}}</h2></div>
            </div>
        </div>
        <div class="breadcrumbs-wrapper">
            <div class="container">
                <ul itemprop="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList" id="breadcrumbs"
                    class="breadcrumbs">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                         href="{{url('/')}}"
                                                                                                         title="Trang chủ"><span
                                    itemprop="name">Trang chủ</span></a></li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item"
                                                                                                         href="{{route('post.show')}}"
                                                                                                         title="Blog"><span
                                    itemprop="name">Tin tức</span></a></li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span
                                itemprop="name" title="Online Learning Glossary"></span></li>
                </ul>
            </div>
        </div>
        <div class="container site-content sidebar-right" style="transform: none;">
            <div class="row" style="transform: none;">
                <main id="main" class="site-main col-sm-9 alignleft">
                    <div class="page-content">
                        <article id="post-3698"
                                 class="post-3698 post type-post status-publish format-standard has-post-thumbnail hentry category-blog tag-course pmpro-has-access">
                            <div class="page-content-inner">
                                <header class="entry-header"><h1 class="entry-title">{{$post->title}}</h1>
                                    <ul class="entry-meta">
                                        <li class="author"><span>Đăng bởi</span> <span
                                                    class="vcard author author_name"><a
                                                        href="https://educationwp.thimpress.com/author/minhluu/">Anthony</a></span>
                                        </li>
                                        <li class="entry-category"><span>Danh mục</span> <a
                                                    href="{{route('post.show')}}"
                                                    rel="category tag">Tin tức</a></li>
                                        <li class="entry-date"><span>Ngày đăng</span> <span
                                                    class="value">{{$post->created_at->format('d-m-Y')}}</span>
                                        </li>
                                    </ul>
                                </header>
                                <div class="post-formats-wrapper"><a class="post-image"
                                                                     href="{{route('post.show',$post->slug)}}"><img
                                                width="870" height="445"
                                                src="{{url('../resources/upload/post/'.$post->avatar)}}"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                srcset="{{url('../resources/upload/post/'.$post->avatar)}}"
                                                sizes="(max-width: 870px) 100vw, 870px"></a></div>
                                <div class="entry-content">
                                    {!! $post->content !!}
                                    <span
                                            class="cp-load-after-post"></span></div>
                                <div class="entry-tag-share">
                                    <div class="row">
                                        <div class="col-sm-6"><p class="post-tag"><span>Tag:</span><a
                                                        href="{{route('subject.show')}}" rel="tag">Khóa học</a>
                                            </p></div>
                                        <div class="col-sm-6">
                                            <ul class="thim-social-share">
                                                <li class="heading">Chia sẻ:</li>
                                                <li>
                                                    <div class="facebook-social"><a target="_blank" class="facebook"
                                                                                    href="https://www.facebook.com/sharer.php?u={{route('post.show',$post->slug)}}"
                                                                                    title="Facebook"><i
                                                                    class="fa fa-facebook"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="googleplus-social"><a target="_blank" class="googleplus"
                                                                                      href="https://plus.google.com/share?url=https%3A%2F%2Feducationwp.thimpress.com%2Fonline-learning-glossary%2F&amp;title=Online%20Learning%20Glossary"
                                                                                      title="Google Plus"
                                                                                      onclick="window.open(this.href, &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;)return false;"><i
                                                                    class="fa fa-google"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="twitter-social"><a target="_blank" class="twitter"
                                                                                   href="https://twitter.com/share?url=https%3A%2F%2Feducationwp.thimpress.com%2Fonline-learning-glossary%2F&amp;text=Online%20Learning%20Glossary"
                                                                                   title="Twitter"><i
                                                                    class="fa fa-twitter"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="pinterest-social"><a target="_blank" class="pinterest"
                                                                                     href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Feducationwp.thimpress.com%2Fonline-learning-glossary%2F&amp;description=Lorem%20Ipsum%20is%20simply%20dummy%20text%20of%20the%20printing%20and%20typesetting%20industry.%20Lorem%20Ipsum%20has%20been%20the%20industry%26%238217%3Bs%20standard%20dummy%20text%20ever%20since%20the%201500s%2C%20when%20an%20unknown%20printer%20took%20a%20galley%20of%20type%20and%20scrambled%20it%20to%20make%20a%20%26hellip%3B%20&amp;media=https%3A%2F%2Feducationwp.thimpress.com%2Fwp-content%2Fuploads%2F2016%2F01%2Fblog-8.jpg"
                                                                                     onclick="window.open(this.href); return false;"
                                                                                     title="Pinterest"><i
                                                                    class="fa fa-pinterest-p"></i></a></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="thim-about-author">
                                    {{--<div class="author-wrapper">--}}
                                    {{--<div class="author-avatar"><img alt="Admin bar avatar"--}}
                                    {{--src="https://educationwp.thimpress.com/wp-content/uploads/learn-press-profile/12/athony1-thumb.jpg"--}}
                                    {{--class="avatar avatar-110 photo" height="110"--}}
                                    {{--width="110"></div>--}}
                                    {{--<div class="author-bio">--}}
                                    {{--<div class="author-top"><a class="name"--}}
                                    {{--href="https://educationwp.thimpress.com/author/minhluu/">--}}
                                    {{--Anthony </a>--}}
                                    {{--<p class="job">Author</p></div>--}}
                                    {{--<ul class="thim-author-social">--}}
                                    {{--<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#" class="google-plus"><i--}}
                                    {{--class="fa fa-google-plus"></i></a></li>--}}
                                    {{--<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>--}}
                                    {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="author-description"> Lorem Ipsum is simply dummy text of the--}}
                                    {{--printing and typesetting industry. Lorem Ipsum has been the industry's--}}
                                    {{--standard dummy text ever since the 1500s, when an unknown printer took a--}}
                                    {{--galley of type and scrambled it to make a type specimen book. It has--}}
                                    {{--survived not only five centuries, but also the leap into electronic--}}
                                    {{--typesetting, remaining essentially unchanged. It was popularised in the--}}
                                    {{--1960s.--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="fb-comments" style="width: 100%"
                                         data-href="{{route('post.show',$post->slug)}}"
                                         width="100%" data-numposts="5">

                                    </div>
                                </div>
                                {{--<div class="entry-navigation-post">--}}
                                    {{--<div class="prev-post"><p class="heading">Previous post</p><h5 class="title"><a--}}
                                                    {{--href="https://educationwp.thimpress.com/tips-to-succeed-in-an-online-course/">Tips--}}
                                                {{--to Succeed in an Online Course</a></h5>--}}
                                        {{--<div class="date"> 20/01/2016</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="next-post"><p class="heading">Next post</p><h5 class="title"><a--}}
                                                    {{--href="https://educationwp.thimpress.com/relaxing-after-work/">Relaxing--}}
                                                {{--after work</a></h5>--}}
                                        {{--<div class="date"> 20 January, 2016</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <section class="related-archive"><h3 class="single-title">Bạn cũng sẽ thích</h3>
                                    <ul class="archived-posts">
                                        @foreach($last_post as $last)
                                            <li class="post-3699 post type-post status-publish format-standard has-post-thumbnail hentry category-blog tag-designer tag-seo pmpro-has-access">
                                                <div class="category-posts clear">
                                                    <div class="post-formats-wrapper"><a class="post-image"
                                                                                         href="{{route('post.show',$last->slug)}}"><img
                                                                    width="300" height="153"
                                                                    src="{{url('../resources/upload/post/'.$last->avatar)}}"
                                                                    class="attachment-medium size-medium wp-post-image"
                                                                    alt=""
                                                                    srcset=""
                                                                    sizes="(max-width: 300px) 100vw, 300px"></a></div>
                                                    <div class="rel-post-text"><h5><a
                                                                    href="{{route('post.show',$last->slug)}}"
                                                                    title="{{$last->title}}">{{$last->title}}</a></h5>
                                                        <div class="date">{{$last->created_at->format('d-m-Y')}}</div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </section>
                            </div>
                        </article>
                    </div>
                </main>
                @include('_partial.sidebar')
            </div>
        </div>
    </section>
@endsection