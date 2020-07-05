@php
    /** @var \WebDevEtc\BlogEtc\Models\Post $post */
@endphp

    {{--@if(config("blogetc.use_custom_view_files")  && $post->use_view_file)--}}
    {{--                                // use a custom blade file for the output of those blog post--}}
    {{--   @include("blogetc::partials.use_view_file")--}}
    {{--@else--}}
    {{--   {!! $post->post_body !!}        // unsafe, echoing the plain html/js--}}
    {{--   {{ $post->post_body }}          // for safe escaping --}}
    {{--@endif--}}

{{--<div class="cor about-sp">--}}
{{--    <div class="ed-about-tit">--}}
{{--        <div class="con-title">--}}
{{--            <h2>{{$post->title}}</h2>--}}
{{--            <p>{{$post->subtitle}}</p>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <div class="ho-event pg-eve-main pg-blog">--}}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <div class="ho-ev-date pg-eve-date"><span>07</span><span>jan,2018</span>--}}
{{--                        </div>--}}
{{--                        <div class="pg-eve-desc pg-blog-desc">--}}
{{--                            Posted <strong>{{ $post->posted_at->diffForHumans() }}</strong>--}}
{{--                            <div class="share-btn blog-share-btn">--}}
{{--                                @includeWhen($post->categories, 'blogetc::partials.categories', ['post'=>$post])--}}
{{--                            </div>--}}
{{--                            <?=$post->imageTag('medium', false, 'd-block mx-auto'); ?>--}}
{{--                            <p>{!! $post->renderBody() !!}</p>--}}
{{--                            @if($post->posted_at)--}}
{{--                                Posted <strong>{{ $post->posted_at->diffForHumans() }}</strong>--}}
{{--                            @endif--}}

{{--                            @includeWhen($post->author, 'blogetc::partials.author', ['post'=>$post])--}}

{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="pg-pagina">--}}
{{--            <ul class="pagination">--}}
{{--                <li class="disabled"><a href="#!"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>--}}
{{--                <li class="active"><a href="#!">1</a></li>--}}
{{--                <li class="waves-effect"><a href="#!">2</a></li>--}}
{{--                <li class="waves-effect"><a href="#!">3</a></li>--}}
{{--                <li class="waves-effect"><a href="#!">4</a></li>--}}
{{--                <li class="waves-effect"><a href="#!">5</a></li>--}}
{{--                <li class="waves-effect"><a href="#!"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>--}}
{{--            </ul>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}





<div class="cor-p1">
    <h2>{{$post->title}}</h2>
    <span style="color:#203245"><small>Posted {{ $post->posted_at->diffForHumans() }}</small></span><br>
    <div style="margin-top: 10px;">
        <span style="color:#203245">Category : @includeWhen($post->categories, 'blogetc::partials.categories', ['post'=>$post])
    </div>
</div>

<div class="cor-mid-img">
    <?=$post->imageTag('medium', false, 'd-block mx-auto'); ?>
</div>

<div class="cor-p4">
    <h3>{{$post->subtitle}}</h3>
    <p>{!! $post->renderBody() !!}</p>
</div>
<div class="cor-p1">
    <div class="share-btn">
        <ul>
            <li><a href="#"><i class="fa fa-facebook fb1"></i> Share On Facebook</a>
            </li>
            <li><a href="#"><i class="fa fa-twitter tw1"></i> Share On Twitter</a>
            </li>
            <li><a href="#"><i class="fa fa-google-plus gp1"></i> Share On Google Plus</a>
            </li>
        </ul>
    </div>
</div>

