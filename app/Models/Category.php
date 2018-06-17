<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = ['title', 'slug', 'parent_id', 'published', 'created_by', 'midified_by'];
    
    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), "-");
    }

    // Get children category  (cheldren==дети)
    public function children() {
        return $this->hasMany(self::class,'parent_id');
    }
    
    // Polymorphic relation with articles
    public function articles() {
        return $this->morphedByMany('App\Models\article', 'categoryable');
    }
    
    public function scopeLastCategories($query, $count){
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
