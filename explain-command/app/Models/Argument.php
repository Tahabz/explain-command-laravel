<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Argument extends Model
{
    /**
     * Get the argument that owns the Argument
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    use HasFactory;

    /**
     * Get the command that owns the Argument
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function command()
    {
        return $this->belongsTo(Command::class);
    }
}
