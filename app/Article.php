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

    public function toSearchableArray()
    {
        $array = $this->toArray();
        echo $array;
        return $array;
    }
}
