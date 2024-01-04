<?php

namespace Modules\CommentModule\Entities;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [];

    // Laravel 7 factory syntax
    protected static function boot()
    {
        parent::boot();

        static::factory(function () {
            return \Modules\CommentModule\Database\factories\CommentFactory::new();
        });
    }
}
