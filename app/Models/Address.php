<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'address_line',
        'city',
        'state',
        'postal_code',
    ];

    // Kullanıcıyla ilişki
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}