<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'title_en',
        'title_uz',
        'title_ru',
        'slug_en',
        'body_en',
        'body_uz',
        'body_ru',
        'author_en',
        'author_uz',
        'author_ru',
        'link',
        'image1',
        'image2',
        'image3',
        'image4',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];
}
