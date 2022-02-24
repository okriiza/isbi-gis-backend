<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Element extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'name_element',
        'slug',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        $user = Auth::user()->name ?? '';
        return LogOptions::defaults()
            ->logOnly(['name_element'])
            ->setDescriptionForEvent(fn (string $eventName) => "{$user} has been {$eventName} Element");
        // Chain fluent methods for configuration options
    }

    public function type()
    {
        return $this->hasMany(Type::class, 'element_id', 'id');
    }
}
