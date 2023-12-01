<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BlogPost extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(Users::class);
    }
    public function category (): BelongsTo
    {
        return $this->belongsTo(Categories::class);
    }
    public function tags (): BelongsTo
    {
        return $this->belongsTo(tags::class);
    }
    public function comments (): HasMany
    {
        return $this->HasMany(Comments::class);
    }

}
