<!-- Main Content -->
<div class="post-preview">
    <a href="/posts/{{$post->id}}">
        <h2 class="post-title">
            {{$post->title}}

        </h2>
        <h4 class="post-subtitle">
        	<span style="display:block;text-overflow: ellipsis;width: auto;overflow: hidden; white-space: nowrap;">
      			{{$post->body}}
			</span>
        </h4>
    </a>
    <p class="post-meta">Posted by {{$post->user->name}} on {{$post->created_at->toFormattedDateString()}}</p>
</div>
<hr>