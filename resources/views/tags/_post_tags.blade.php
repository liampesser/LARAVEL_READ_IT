{{--
  Variables disponibles:
    - $tags ARRAY(Tag)
 --}}
<div class="tag-widget post-tag-container mb-5 mt-5">
  <div class="tagcloud">
    @foreach ($tags as $tag)
      <a href="#" class="tag-cloud-link">{{ $tag->name }}</a>
    @endforeach
  </div>
</div>
