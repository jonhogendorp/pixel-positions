<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;     
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;


    public function tag()
    {

    }

    public function tags()
    {

    }

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function jobs(): HasMany
    // {
    //     return $this->hasMany(Job::class);
    // }
}
