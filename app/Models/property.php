<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'location', 'owner_id'];

    // Relation avec le modèle Owner
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}