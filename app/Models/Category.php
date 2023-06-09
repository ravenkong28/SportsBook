<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'category_id';
    protected $guarded = ['id'];


    public function arena(){
        return $this->belongsTo(Arenas::class);
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
