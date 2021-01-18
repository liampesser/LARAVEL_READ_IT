{{--
  Variables disponibles
    $posts ARRAY(Post)
 --}}

<h3>Recent Blog</h3>
@foreach ($posts as $post)
  <div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url('{{ asset('assets/images/' . $post->image) }}');"></a>
    <div class="text">
      <h3 class="heading">
        <a href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}">{{ $post->title }}</a>
      </h3>
      <div class="meta">
        <div><a href="#"><span class="icon-calendar"></span> {{ \Carbon\Carbon::parse($post->created_at)->format('M. d Y') }} </a></div>
        <div><a href="#"><span class="icon-person"></span> {{$post->author->firstname}} {{$post->author->lastname}}</a></div>
        <div><a href="#"><span class="icon-chat"></span> {{ count($post->comments)}} </a></div>
      </div>
    </div>
  </div>
@endforeach
