<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    // protected $fillable = ['name', 'owner_id', 'date_of_birth', 'type', 'weight_kg', 'height_m', 'biteyness'];

    public function owner() 
    {
        $this->belongsTo(Owner::class);
    }

    public function dangerous()
    {
        return $this->biteyness >= 3;
    }
}
