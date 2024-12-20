<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image', 'status'];

    public function genres(): BelongsToMany
    {
        return $this->BelongsToMany(Genre::class);

    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
