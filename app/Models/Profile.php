<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Profile extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    
    protected $table = 'profile';
    protected $fillable = [
        'first_name',
        'last_name',
        'street',
        'phone',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
