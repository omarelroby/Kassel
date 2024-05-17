<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class BlogTranslation extends Model
{

     protected $fillable = [
        'title',
        'image',
         'description',
        'blog_id',
    ];
    public $timestamps = false;



}
