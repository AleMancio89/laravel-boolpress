<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['category_id', 'title', 'author'];

    public function postInformation() {

        return $this->hasOne('App\PostInformation', 'post_id', 'id');

    }

    public function category() {

        return $this->belongsTo('App\Category');

    }

    public function tags() {
        return $this->belongsToMany('App\Tag', 'post_tags', 'post_id', 'tag_id');
    }
}
