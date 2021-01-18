{{--
  Variables disponibles
    - $categories ARRAY(Categorie)
 --}}
<div class="categories">
  <h3>Categories</h3>
  <ul>
    @foreach ($categories as $categorie)
      <li>
        <a href="#">
          {{ $categorie->name }} [{{ count($categorie->posts) }}]
          <span class="ion-ios-arrow-forward"></span>
        </a>
      </li>
    @endforeach
  </ul>
</div>
