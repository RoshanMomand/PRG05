<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Genre extends Model
{
//    /** @use HasFactory<\Database\Factories\GenreFactory> */
    use HasFactory;


    public function blogs(): BelongsToMany
    {
        return $this->BelongsToMany(Blog::class);

    }
}
