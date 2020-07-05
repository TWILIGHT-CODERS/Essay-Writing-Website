<div class="c-sidebar-brand">
    <img class="c-sidebar-brand-full" src="{{ env('APP_URL', '') }}/assets/brand/coreui-base-white.svg" width="118" height="46" alt="Elites Paper Logo">
    <img class="c-sidebar-brand-minimized" src="assets/brand/coreui-signet-white.svg" width="118" height="46" alt="Elites Logo"></div>
        <ul class="c-sidebar-nav">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="/dashboard">
                    <i class="cil-speedometer c-sidebar-nav-icon"></i>
                    Dashboard
                </a>
            </li>
            <li class="c-sidebar-nav-title">
                Posts
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('blogetc.admin.index') }}">
                    <i class="cil-applications c-sidebar-nav-icon"></i>
                    All Posts (<?php
                    use WebDevEtc\BlogEtc\Models\BlogEtcPost;use WebDevEtc\BlogEtc\Models\Category;use WebDevEtc\BlogEtc\Models\Comment;$categoryCount = BlogEtcPost::count();?>{{$categoryCount}})
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('blogetc.admin.create_post') }}">
                    <i class="cil-plus c-sidebar-nav-icon"></i>
                    Add Post
                </a>
            </li>

            <li class="c-sidebar-nav-title">
                Comments
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('blogetc.admin.comments.index') }}">
                    <i class="cil-lemon c-sidebar-nav-icon"></i>
                    All Comments (<?php
                    $commentCount = Comment::withoutGlobalScopes()->count();
                    ?>{{$commentCount}})
                </a>
            </li>
            <?php $comment_approval_count = Comment::withoutGlobalScopes()
                ->where('approved', false)->count(); ?>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('blogetc.admin.comments.index') }}?waiting_for_approval=true">
                    <i class="cil-alarm c-sidebar-nav-icon"></i>
                    Awaiting Approval ({{ $comment_approval_count }})
                </a>
            </li>

            <li class="c-sidebar-nav-title">
                Categories
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('blogetc.admin.categories.index') }}">
                    <i class="cil-library c-sidebar-nav-icon"></i>
                    All Categories <?php $postCount = Category::count(); ?>
                    ({{ $postCount }})
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('blogetc.admin.categories.create_category') }}">
                    <i class="cil-library-add c-sidebar-nav-icon"></i>
                    Add Category
                </a>
            </li>

            @if(config("blogetc.image_upload_enabled"))

                <li class="c-sidebar-nav-title">
                    Uploads
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('blogetc.admin.images.all') }}">
                        <i class="cil-cloud c-sidebar-nav-icon"></i>
                        View All
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('blogetc.admin.images.upload') }}">
                        <i class="cil-cloud-download c-sidebar-nav-icon"></i>
                        Upload Image
                    </a>
                </li>
            @endif
        </ul>
<button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
