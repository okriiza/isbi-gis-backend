<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = [
        'element_id', 'area_id', 'name_type', 'slug', 'image'
    ];

    public function element()
    {
        return $this->belongsTo(Element::class, 'element_id', 'id');
    }
    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }
    public function getImageAttribute($value)
    {
        if (!$value) return null;
        return url('storage/' . $value);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    protected $hidden = [
        'element_id',
        'area_id',
    ];
}
