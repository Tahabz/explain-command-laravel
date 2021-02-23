<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PackageManager extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];
    public $timestamps = false;


    /**
     * Get all of the command for the PackageManager
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commands()
    {
        return $this->hasMany(Command::class);
    }

}
