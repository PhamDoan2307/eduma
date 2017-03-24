@extends('layouts.master')
@section('content')
    <section class="content-area" style="transform: none; min-height: 329px;">
        <div class="top_site_main"
             style="color: rgb(255, 255, 255); background-image: url(&quot;https://educationwp.thimpress.com/wp-content/themes/eduma/images/bg-page.jpg&quot;); padding-top: 140px;">
            <div class="page-title-wrapper">
                <div class="banner-wrapper container"><h1>Blog</h1></div>
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
                                itemprop="name" title="Why You Should Read Every Day">Blog</span></li>
                </ul>
            </div>
        </div>
        <div class="container site-content sidebar-right" style="transform: none;">
            <div class="row" style="transform: none;">
                <main id="main" class="site-main col-sm-9 alignleft">
                    <div id="blog-archive" class="blog-content">
                        <div class="row">
                            @foreach($posts as $post)
                                @include('post._post_list')
                                @endforeach
                        </div>
                    </div>
                    <div class="pagination loop-pagination">
                        {!! $posts->links() !!}
                    </div>
                </main>
                @include('_partial.sidebar')
            </div>
        </div>
    </section>
@endsection