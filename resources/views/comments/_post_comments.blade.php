{{--
  Variables disponibles
    - $comments ARRAY(Comment)
 --}}
<h3 class="mb-5">{{ count($comments) }} Comments</h3>
<ul class="comment-list">

  @foreach ($comments as $comment)
    <li class="comment">
      <div class="comment-body">
        <h3>{{ $comment->pseudo }}</h3>
        <div class="meta mb-3">{{ \Carbon\Carbon::parse($comment->created_at)->format('F d, Y at g:ia') }}</div>
        <p>{{ $comment->content }}</p>
      </div>
    </li>
  @endforeach

</ul>
<!-- END comment-list -->
