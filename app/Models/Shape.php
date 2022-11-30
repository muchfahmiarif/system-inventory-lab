<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shape extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function glassware() {
        return $this->hasMany(Glassware::class);
    }
}
