<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mans extends Model
{
    use HasFactory;
    protected $table = 'mans';
    protected $fillable = [
        'username',
        'email',
        'password',
    ];
    public function posts()
    {
        return $this->hasMany(Mans::class,'post_id','id');
    }

}
