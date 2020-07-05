{{--<h5>Post Categories</h5>--}}
{{--<ul class="nav">--}}
{{--    --}}{{-- TODO replace with repo--}}
{{--    @foreach(\WebDevEtc\BlogEtc\Models\Category::orderBy('category_name')->limit(200)->get() as $category)--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="{{ $category->url() }}">{{ $category->category_name }}</a>--}}
{{--        </li>--}}
{{--    @endforeach--}}
{{--</ul>--}}

@foreach(\WebDevEtc\BlogEtc\Models\Category::orderBy('category_name')->limit(200)->get() as $category)
<li>
    <div class="ho-ev-link ho-ev-link-full">
        <a href="{{$category->url()}}">
            <h4><i class="fa fa-angle-double-right"></i> {{$category->category_name}}</h4>
        </a>
        <!-- <p>Nulla at velit convallis venenatis.</p>
        <span>9:15 am – 5:00 pm</span> -->
    </div>
</li>
@endforeach
