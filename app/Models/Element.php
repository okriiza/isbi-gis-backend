<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_element',
        'slug',
    ];

    public function type()
    {
        return $this->hasMany(Type::class, 'element_id', 'id');
    }
}
