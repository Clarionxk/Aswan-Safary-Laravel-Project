<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'description',
        'image',
        'url',
        'available_rooms',
    ];
    public function rooms()
{
    return $this->hasMany(Room::class);
}
public function imges()
{
    return $this->hasMany(Imge::class);
}
public function hotelservecs()
{
    return $this->hasMany(Hotelservec::class);
}
}
