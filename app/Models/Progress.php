<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'progress',
    ];
    // Define the inverse of the relationship (many-to-one)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
