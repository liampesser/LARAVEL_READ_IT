<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * GETTER de l'author du post
     */
    public function author () {
      return $this->belongsTo('App\Models\Author');
    }

    public function categorie () {
      return $this->belongsTo('App\Models\Categorie');
    }

    public function comment () {
      return $this->belongsTo('App\Models\Comment');
    }


    public function tags () {
      return $this->belongsToMany('App\Models\Tag' , 'posts_has_tags');
    }


}
