<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable = ['categories_id', 'nama', 'nis', 'angkatan', 'tanggal_lahir', 'notelp', 'email', 'alamat', 'users_id'];
    
    public function categories()
    {
        return $this->belongsTo('App\Models\Categories');
    }
    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
}
