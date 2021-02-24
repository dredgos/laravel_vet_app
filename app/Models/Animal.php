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

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class);
    }

    public function dangerous()
    {
        return $this->biteyness >= 3;
    }

    public function lastUpdated()
    {
        return $this->updated_at->diffForHumans();
    }

    public function setTreatments(array $strings) : Animal
    {
        $tags = Treatment::fromStrings($strings);
        $this->treatments()->sync($tags->pluck("id"));
        return $this;
    }

    
}
