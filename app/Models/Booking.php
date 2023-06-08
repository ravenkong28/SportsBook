<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function arena(){
        return $this->belongsTo(Arenas::class, 'arena_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function booking_detail(){
        return $this->belongsTo(Booking_detail::class, 'booking_detail_id');
    }
}
