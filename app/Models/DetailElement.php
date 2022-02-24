<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class DetailElement extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'element_id', 'area_id', 'type_id', 'description', 'source',
    ];
    public function getActivitylogOptions(): LogOptions
    {
        $user = Auth::user()->name;
        return LogOptions::defaults()
            ->logOnly(['name_audio', 'path_audio', 'detail_element_id'])
            ->setDescriptionForEvent(fn (string $eventName) => "{$user} has been {$eventName} Detail Element");
        // Chain fluent methods for configuration options
    }
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
