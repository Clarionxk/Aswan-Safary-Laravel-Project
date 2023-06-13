<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imge extends Model
{

    use HasFactory;
    protected $fillable = [
        'url',
        'hotel_id',
        'created_at	',
        'updated_at',


    ];
    public function hotel()
{
    return $this->belongsTo(Hotel::class);
}

}
