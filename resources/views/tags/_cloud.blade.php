{{--
  Variables disponibles:
    - $tags ARRAY(Tag)
 --}}

 <h3>Tag Cloud</h3>
 <div class="tagcloud">
   @foreach ($tags as $tag)
     <a href="#" class="tag-cloud-link">{{ $tag->name }}</a>
   @endforeach
 </div>
