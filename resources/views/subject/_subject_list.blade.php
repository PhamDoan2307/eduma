<div class="course-item">
        <div class="course-thumbnail"><a href="{{route('subject.show',['slug'=>$subject->slug])}}">
                <img src="{{url('../resources/upload/subject/'.$subject->avatar)}}"
                     alt="{{$subject->name}}" title="{{$subject->name}}" width="450" height="450"> </a> <a
                    class="course-readmore" href="{{route('subject.show',['slug'=>$subject->slug])}}">Read
                More</a></div>
        <div class="thim-course-content">

            <h2 class="course-title"><a href="{{route('subject.show',['slug'=>$subject->slug])}}" rel="bookmark">{{$subject->name}}</a></h2>
            <div class="course-meta">
                <div class="course-review"><label>Review</label>
                    <div class="value">
                        <div class="review-stars-rated">
                            <ul class="review-stars">
                                <li><span class="fa fa-star-o"></span></li>
                                <li><span class="fa fa-star-o"></span></li>
                                <li><span class="fa fa-star-o"></span></li>
                                <li><span class="fa fa-star-o"></span></li>
                                <li><span class="fa fa-star-o"></span></li>
                            </ul>
                            <ul class="review-stars filled" style="width: 100%">
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star"></span></li>
                                <li><span class="fa fa-star"></span></li>
                            </ul>
                        </div>
                        <span>(3 reviews)</span></div>
                </div>
                <div class="course-students"><label>Sinh viên</label>
                    <div class="value"><i class="fa fa-group"></i> {{$subject->numberOfEnroll}}</div>
                </div>
                <div class="course-comments-count">
                    <div class="value"><i class="fa fa-comment"></i>3</div>
                </div>
                <div class="course-price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                    <div class="value free-course" itemprop="price" content="{{$subject->price}}"> {{number_format($subject->price,0,',','.') }} VNĐ</div>
                    <meta itemprop="priceCurrency" content="$">
                </div>
            </div>
            <div class="course-description"><p>{{str_limit($subject->content,200)}}</p></div>
            <div class="course-price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                <div class="value free-course" itemprop="price" content="{{$subject->price}}"> {{$subject->price}}</div>
                <meta itemprop="priceCurrency" content="$">
            </div>
            <div class="course-readmore"><a href="{{route('subject.show',['slug'=>$subject->slug])}}">Chi Tiết</a></div>
        </div>
    </div>
