<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $table = 'pesans';

    protected $fillable = ['users_id', 'pesan'];

    public function Users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
