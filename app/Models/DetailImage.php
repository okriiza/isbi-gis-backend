<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class DetailImage extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'name_image','path_image', 'detail_element_id',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        $user = Auth::user()->name;
        return LogOptions::defaults()
            ->logOnly(['name_image','path_image', 'detail_element_id'])
            ->setDescriptionForEvent(fn (string $eventName) => "{$user} has been {$eventName} Image Detail Element");
        // Chain fluent methods for configuration options
    }

    public function detailElement()
    {
        return $this->belongsTo(DetailElement::class);
    }

    public function getPathImageAttribute($value)
    {
        return url('storage/' . $value);
    }
    protected $hidden = [
        'detail_element_id',
        'created_at',
        'updated_at',
    ];
}
