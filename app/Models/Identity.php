<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Identity extends Model
{
    public function stories(): HasMany {
        return $this->hasMany(Story::class, 'identity_id', 'id');
    }

    public function genres(): HasMany
    {
        return $this->hasMany(Genre::class, 'identity_id', 'id');
    }
}
