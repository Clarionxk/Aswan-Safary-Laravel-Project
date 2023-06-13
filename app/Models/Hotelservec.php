<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotelservec extends Model
{

    use HasFactory;
    protected $fillable = [
        'hotel_id',
        'service_id',
        'created_at	',
        'updated_at',

    ];
    public function hotel()
{
    return $this->hasMany(Hotel::class);
}
}
