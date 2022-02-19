<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailElement extends Model
{
    use HasFactory;
    protected $fillable = [
        'element_id', 'area_id', 'type_id', 'description', 'source',
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
    public function detailImages()
    {
        return $this->hasMany(DetailImage::class, 'detail_element_id', 'id');
    }
    public function detailAudios()
    {
        return $this->hasMany(DetailAudio::class, 'detail_element_id', 'id');
    }
    public function detailVideos()
    {
        return $this->hasMany(DetailVideo::class, 'detail_element_id', 'id');
    }
    protected $hidden = [
        'element_id',
        'area_id',
        'type_id',
    ];
}
