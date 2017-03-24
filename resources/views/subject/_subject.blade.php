<div class="course-item">
    <div class="course-thumbnail">
        <a href="#">
            <img src="{{url('../resources/upload/subject/'.$subject->avatar)}}"
                    alt="{{$subject->title}}" title="{{$subject->name}}"
                    width="450" height="450">
        </a>
        <a class="course-readmore"
           href="{{route('subject.show',['slug'=>$subject->slug])}}">Chi tiết
        </a>
    </div>
    <div class="thim-course-content">
        {{--<div class="course-author" itemscope--}}
             {{--itemtype="http://schema.org/Person">--}}
            {{--<img alt="Admin bar avatar" --}}
                 {{--src="https://educationwp.thimpress.com/wp-content/uploads/learn-press-profile/7/9c081444f942cc8fe0ddf55631b584e2.jpg"--}}
                 {{--class="avatar avatar-40 photo"--}}
                 {{--height="40" width="40"/>--}}
            {{--<div class="author-contain">--}}
                {{--<label itemprop="jobTitle">Teacher</label>--}}
                {{--<div class="value" itemprop="name">--}}
                    {{--<a href="https://educationwp.thimpress.com/profile/keny/courses/">--}}
                        {{--Keny White --}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <h2 class="course-title">
            <a href="{{route('subject.show',['slug'=>$subject->slug])}}"> {{$subject->name}}
            </a>
        </h2>
        <div class="course-meta">
            <div class="course-students"><label>Sinh viên</label>
                <div class="value"><i class="fa fa-group"></i> {{$subject->numberOfEnroll}}</div>
            </div>
            {{--<div class="course-comments-count">--}}
                {{--<div class="value"><i class="fa fa-comment"></i>1</div>--}}
            {{--</div>--}}
            <div class="course-price" itemprop="offers" itemscope
                 itemtype="http://schema.org/Offer">
                <div class="value free-course" itemprop="price" content="{{number_format($subject->price,0,',','.')}}">
                    {{number_format($subject->price,0,',','.')}} VNĐ
                </div>
                <meta itemprop="priceCurrency" content="&#36;"/>
            </div>
        </div>
    </div>
</div>