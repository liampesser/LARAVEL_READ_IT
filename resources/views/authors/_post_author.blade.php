{{--
  Variables disponibles
    -> $author Author
 --}}
<div class="about-author d-flex p-4 bg-light">
  <div class="bio mr-5">
    <img src="{{ asset('assets/images/' . $author->image) }}" alt="{{ $author->firstname . ' ' . $author->lastname }}" class="img-fluid mb-4">
  </div>
  <div class="desc">
    <h3>{{ $author->firstname . ' ' . $author->lastname }}</h3>
    <p>{!! $author->biography !!}</p>
  </div>
</div>
