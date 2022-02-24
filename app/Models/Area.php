<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Area extends Model
{
    use HasFactory, LogsActivity;
    protected $fillable = [
        'kode_area',
        'name_area',
        'slug',
        'latitude',
        'longitude'
    ];
    public function getActivitylogOptions(): LogOptions
    {
        $user = Auth::user()->name ?? '';
        return LogOptions::defaults()
            ->logOnly(['kode_area', 'name_area', 'latitude', 'longitude'])
            ->setDescriptionForEvent(fn (string $eventName) => "{$user} has been {$eventName} Area");
        // Chain fluent methods for configuration options
    }
}
