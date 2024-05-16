<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ContactUs extends Model
{


    protected $table='contact_us';
    protected $fillable = [
        'title',
        'message',
        'user_id',
     ];
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
