<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'path_image', 'detail_element_id',
    ];

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
