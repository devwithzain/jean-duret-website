<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'image', 'short_description', 'description'];
    protected static function booted()
    {
        static::creating(function ($service) {
            $service->slug = Str::slug($service->title);
        });

        static::updating(function ($service) {
            $service->slug = Str::slug($service->title);
        });
    }
}