<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tour_book extends Model
{
    use HasFactory;

protected $table = 'tour_book';
protected $fillable = [

'How_many',
'user_id',
'tour_id '
];
}
