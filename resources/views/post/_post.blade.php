<div class="item">
    <div class="image"><a
                href="{{route('post.show',['slug'=>$post->slug])}}">
            <img src="{{url('../resources/upload/post/'.$post->avatar)}}"
                 alt="Online Learning Glossary" title="blog-8" width="450"
                 height="267"> </a></div>
    <div class="content">
        <div class="info">
            {{--<div class="author"><span>{{$post->user->name}}</span></div>--}}
        </div>
            <div class="date"> {{$post->created_at->format('d-m-Y')}}
        </div>
        <h4 class="title"><a
                    href="{{route('post.show',['slug'=>$post->slug])}}">{{$post->title}}</a></h4></div>
</div>