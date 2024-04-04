<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Accounts extends Model
{
    use HasFactory;


    /**
     * Get all the movements
     */
    public function getMovements(){
        return $this->hasMany(Movements::class);
    }
}
