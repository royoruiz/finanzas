<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movements extends Model
{
    use HasFactory;

    /** 
     * Get the account related to the movement
    */
    public function getAccount(){
        return $this->belongsTo(Accounts::class);
    }
}
