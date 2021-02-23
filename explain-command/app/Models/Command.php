<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;
    /**
     * Get the command that owns th
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    /**
     * Get the packageManager associated with the Command
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function packageManager()
    {
        return $this->belongsTo(PackageManager::class);
    }

    /**
     * Get all of the arguments for the Command
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function arguments()
    {
        return $this->hasMany(Argument::class);
    }
}
