<article id="post-3696" class="col-sm-12 post-3696 post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-wordpress pmpro-has-access">
    <div class="content-inner">
        <div class="post-formats-wrapper"><a class="post-image" href="{{route('post.show',['slug'=>$post->slug])}}"><img width="870" height="445" src="{{url('../resources/upload/post/'.$post->avatar)}}" class="attachment-full size-full wp-post-image" alt=""  ></a></div>
        <div class="entry-content">
            <header class="entry-header">
                <div class="date-meta"><i>{{changeDate($post->created_at)}} </i></div>
                <div class="entry-contain"><h2 class="entry-title"><a href="{{route('post.show',$post->slug)}}" rel="bookmark">{{$post->title}}</a></h2>
                    <ul class="entry-meta">
                        <li class="author"><span>Tác giả</span> <span class="vcard author author_name"><a href="https://educationwp.thimpress.com/author/minhluu/">Anthony</a></span>
                        </li>
                        {{--<li class="entry-category"><span>Danh mục</span> <a href="https://educationwp.thimpress.com/category/business/" rel="category tag">{{$post->category->name}}</a></li>--}}
                    </ul>
                </div>
            </header>
            <div class="entry-summary"><p>{!!str_limit($post->content,200)!!}</p></div>
            <div class="readmore"><a href="{{route('post.show',$post->slug)}}">Chi tiết</a></div>
        </div>
    </div>
</article>