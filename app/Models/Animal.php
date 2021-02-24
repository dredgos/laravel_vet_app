<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Owner;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date_of_birth', 'type', 'weight_kg', 'height_m', 'biteyness'];

    public function owner() 
    {
        return $this->belongsTo(Owner::class);
    }

    public function dangerous()
    {
        return $this->biteyness >= 3;
    }
}
