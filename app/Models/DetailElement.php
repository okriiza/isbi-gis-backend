<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailElement extends Model
{
    use HasFactory;
    protected $fillable = [
        'element_id', 'area_id', 'type_id', 'description', 'image', 'video', 'source',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }
    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }
    public function element()
    {
        return $this->belongsTo(Element::class, 'element_id', 'id');
    }
}
