<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Ringtone extends Model
{
    // protected $fillable = ['title', 'description', 'slug', 'file', 'format', 'size', 'category_id'];
    protected $guarded = [];

    public function category() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
