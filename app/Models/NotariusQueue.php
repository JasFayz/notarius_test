<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotariusQueue extends Model
{
    use HasFactory;

    protected $appends = ['fullName'];

    protected $fillable = [
        'first_name',
        'last_name',
        'uuid',
        'email',
        'date',
        'service_type'
    ];


    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
