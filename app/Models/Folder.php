<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Folder extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the user that owns the Folder
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the codes for the Folder
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function codes(): HasMany
    {
        return $this->hasMany(Code::class);
    }
}
