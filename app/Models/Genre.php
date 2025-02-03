<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    
    public function stories(): HasMany
    {
        return $this->hasMany(Story::class, 'genre_id', 'id');
    }

    public function identity(): BelongsTo
    {
        return $this->belongsTo(Identity::class, 'identity_id', 'id');
    }
}
