<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookService extends Model
{
    protected $fillable = [
        'user_id',
        'service_id',
        'name',
        'email',
        'phone',
        'date',
        'image',
        'specialMessage',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
