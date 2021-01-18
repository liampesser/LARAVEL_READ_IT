<!-- PARTIAL ASIDE  -->

<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
  <div class="sidebar-box">
    <form action="#" class="search-form">
      <div class="form-group">
        <span class="icon icon-search"></span>
        <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
      </div>
    </form>
  </div>
  <div class="sidebar-box ftco-animate">
    @include('categories._index', ['categories' => \App\Models\Categorie::orderBy('name', 'ASC')->get()])
  </div>

  <div class="sidebar-box ftco-animate">
    @include('posts._recents', ['posts' => \App\Models\Post::orderBy('created_at', 'DESC')->take(3)->get()])
  </div>

  <div class="sidebar-box ftco-animate">
    @include('tags._cloud', ['tags' => \App\Models\Tag::orderBy('name', 'ASC')->get()])
  </div>

</div>
