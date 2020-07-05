@php
    /** @var \WebDevEtc\BlogEtc\Models\Post $post */
@endphp
{{--<div>--}}
{{--    <ul>--}}
{{--        <li><a href="#" style="background: transparent; color: #000000; font-size: 0.8em; cursor: none;">Category : </a></li>--}}
{{--        @foreach($post->categories as $category)--}}
{{--            <li>--}}
{{--                <a href="{{ $category->url() }}">--}}
{{--                    <i class="fa fa-tag"></i> {{ $category->category_name }}--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        @endforeach--}}
{{--        @if(Auth::check() && Auth::user()->canManageBlogEtcPosts())--}}
{{--            <a href="{{$post->editUrl()}}" class="btn btn-outline-info pull-right float-right">--}}
{{--                Edit Post--}}
{{--            </a>--}}
{{--        @endif--}}
{{--    </ul>--}}
{{--</div>--}}

@foreach($post->categories as $category)
<a href="{{$category->url()}}" class="ad-st-view"><i class="fa fa-tag"></i> {{ $category->category_name }}</a></span>
@endforeach
@if(Auth::check() && Auth::user()->canManageBlogEtcPosts())
    <a href="{{$post->editUrl()}}" class="btn btn-outline-info pull-right float-right">
        Edit Post
    </a>
@endif

