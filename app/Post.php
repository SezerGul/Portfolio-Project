<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body'
    ];

    /**
     * Define relationship with User
     * 
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * The attributes of title and slug 
     * 
     * Automatically creates a slug for the Post
     */
    public function setTitleAttribute($value) {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
}
