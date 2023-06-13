<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roombook extends Model
{

    use HasFactory;
    protected $fillable = [
        'user_id',
        'room_id',
        'name',
        'check_in',
        'check_out',
        'room_type',
        'select_room',
        'special_request',
        'created_at	',
        'updated_at',


    ];
    public function user()
{
    return $this->hasMany(User::class);
}
public function room()
{
    return $this->belongsTo(Room::class);
}

}
