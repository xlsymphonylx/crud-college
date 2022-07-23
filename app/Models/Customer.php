<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customer";
    protected $guarded = ['id'];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
