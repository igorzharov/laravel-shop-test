<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = false;

    public function subCategory()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
