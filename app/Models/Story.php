<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Story extends Model
{
    use HasFactory;

    // protected $with = ['genre'];

    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => ucfirst($value),
        );
    }

    protected function preview(): Attribute
    {
        return Attribute::make(
            get: fn () => Str::limit($this->body, 100, '...'),
        );
    }

    protected function date(): Attribute
    {
        return Attribute::make(
            get: fn() => Carbon::parse($this->created_at)->toDateString(),
        );
    }
    
    public function identity(): BelongsTo
    {
        return $this->belongsTo(Identity::class, 'identity_id', 'id');
    }

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }
}
