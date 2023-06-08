<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arenas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    //Di controller php jadi ->filter() untuk searching
    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('name', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('name', $category);
            });
        });
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function transaction(){
        return $this->belongsTo(Transaction::class, 'user_id');
    }

    public function booking(){
        return $this->hasMany(Booking::class);
    }
}
