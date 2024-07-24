<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    use HasFactory;

    protected $fillable = ['category','scope','subcategory','user_id'];


    /**
     * Get the user that owns the category
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
