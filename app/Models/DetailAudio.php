<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailAudio extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_audio', 'path_audio', 'detail_element_id',
    ];

    public function detailElement()
    {
        return $this->belongsTo(DetailElement::class);
    }

    public function getPathAudioAttribute($value)
    {
        return url('storage/' . $value);
    }
    protected $hidden = [
        'detail_element_id',
        'created_at',
        'updated_at',
    ];
}
