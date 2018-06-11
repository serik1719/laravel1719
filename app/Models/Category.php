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
}
