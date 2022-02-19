<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'path_video', 'detail_element_id',
    ];

    public function detailElement()
    {
        return $this->belongsTo(DetailElement::class);
    }
    protected $hidden = [
        'detail_element_id',
        'created_at',
        'updated_at',
    ];
}
