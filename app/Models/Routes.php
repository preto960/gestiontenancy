<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Routes extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    
    protected $table = 'routes';
    protected $fillable = [
        'name',
        'path',
        'component',
        'icon',
        'parent_id',
        'meta',
        'type',
        'position',
    ];
}
