<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/laravel5_6/public/posts/{{ $post->id }}">{{ $post->title }}</a>
    </h2>
    <p class="blog-post-meta">
        by {{ $post->user->name}} on 
        {{ $post->created_at->toFormattedDateString() }} 
    </p>
    {{ $post->body }}
</div><!-- /.blog-post -->