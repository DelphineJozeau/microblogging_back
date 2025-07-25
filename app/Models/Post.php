<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";

    protected $fillable = [
        'user_id',// FOREIGN KEY
        'text',
        'img_url',
        'technic_id',//FOREIGN KEY AUSSI => doit aller dans une fonction au dessous
        'created_at',
        'updated_at',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function technic(){
        return $this->belongsTo(Technic::class);

    }
}
