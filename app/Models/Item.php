<?php

namespace App\Models;

use App\Models\UserBid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $guarded  = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class); 
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userBid()
    {
        return $this->hasMany((UserBid::class));
    }
}
