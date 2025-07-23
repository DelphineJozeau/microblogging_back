<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'text', 'img_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class); //relation many-to-one
    }

        public function technic()
    {
        return $this->belongsTo(Technic::class); //relation many-to-one
    }
}
