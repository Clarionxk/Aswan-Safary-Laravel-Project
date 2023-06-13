<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'user_id',
        'Order_id',
        'tour_book_id',
        'status',
        'total_price',
        
    ];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function tour_book()
    {
        return $this->belongsTo(tour_book::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
