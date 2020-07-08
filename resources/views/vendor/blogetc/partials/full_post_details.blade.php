@php
    /** @var \WebDevEtc\BlogEtc\Models\Post $post */
@endphp

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
            <li><a href="#"><i class="fa fa-linkedin li1"></i> Share On Linkedin</a>
            </li>
        </ul>
    </div>
</div>

