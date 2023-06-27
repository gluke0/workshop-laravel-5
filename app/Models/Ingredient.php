<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $table = 'ingredients';

    protected $fillable = ['name', 'slug'];

    public function pizza()
    {
        return $this->belongsToMany(Pizza::class);
    }
}
