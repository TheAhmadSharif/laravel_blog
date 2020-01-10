<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;



class Article extends Model
{

	use Searchable;

    protected $fillable = ['title', 'body', 'created_at', 'updated_at'];

    public function searchableAs()
    {
        return 'articles_index';
    }


    public function getScoutKey()
    {
        return $this->title;
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();
        return array('id' => $array['id'],'title' => $array['title']);

    }
}