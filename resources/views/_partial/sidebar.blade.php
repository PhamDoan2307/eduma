<div id="sidebar" class="widget-area col-sm-3 sticky-sidebar" role="complementary"
     style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
    <div class="theiaStickySidebar"
         style="padding-top: 0px; padding-bottom: 1px; position: static; top: 160px; left: 1074.6px;">
        <aside id="categories-2" class="widget widget_categories"><h4 class="widget-title">
                Danh mục </h4>
            <ul>
                @foreach($categories as $category)
                    <li class="cat-item ">
                        <a href="{{route('category.show',['slug'=>$category->slug])}}">{{$category->name}}</a>
                    </li>
                @endforeach
            </ul>
        </aside>
        <aside id="courses-2" class="widget widget_courses">
            <div class="thim-widget-courses thim-widget-courses-base"><h4 class="widget-title">Khóa học mới </h4>
                <div class="thim-course-list-sidebar">
                    @foreach($latest_subjects as $latest_subject)
                        <div class="lpr_course has-post-thumbnail">
                            <div class="course-thumbnail"><img style="height: 100px" src="{{url('../resources/upload/subject/'.$latest_subject->avatar)}}"
                                        alt="{{$latest_subject->name}}"></div>
                            <div class="thim-course-content"><h3 class="course-title"><a
                                            href="{{route('subject.show',['slug'=>$latest_subject->slug])}}">
                                        {{$latest_subject->name}}</a></h3>
                                <div class="course-price" itemprop="offers" itemscope=""
                                     itemtype="http://schema.org/Offer">
                                    <div class="value free-course" itemprop="price"
                                         content="Free"> {{number_format($latest_subject->price,0,',','.')}} VNĐ
                                    </div>
                                    <meta itemprop="priceCurrency" content="$">
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </aside>
        <aside id="list-post-2" class="widget widget_list-post">
            <div class="thim-widget-list-post thim-widget-list-post-base"><h4 class="widget-title">
                    Bài viết mới</h4>
                <div class="thim-list-posts sidebar">
                    @foreach($latest_posts as $latest_post)
                        <div class="item-post  post type-post status-publish format-standard has-post-thumbnail hentry category-blog tag-course pmpro-has-access">
                            <div class="article-image"><img width="150" height="150"
                                                            src="{{url('../resources/upload/post/'.$latest_post->avatar)}}"
                                                            class="attachment-thumbnail size-thumbnail wp-post-image"
                                                            alt="{{$latest_post->title}}"></div>
                            <div class="article-title-wrapper"><h5><a
                                            href="{{route('post.show',['slug'=>$latest_post->slug])}}"
                                            class="article-title">{{$latest_post->title}}</a></h5>
                                <div class="article-date"><span
                                            class="day">{{$latest_post->created_at->format('d-m-Y')}}</span></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </aside>
    </div>
</div>