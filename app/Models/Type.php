<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Type extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'element_id', 'area_id', 'name_type', 'slug', 'image'
    ];
    public function getActivitylogOptions(): LogOptions
    {
        $user = Auth::user()->name ?? '';
        return LogOptions::defaults()
            ->logOnly(['element_id', 'area_id', 'name_type', 'image'])
            ->setDescriptionForEvent(fn (string $eventName) => "  {$user} has been {$eventName} Type");
        // Chain fluent methods for configuration options
    }

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
