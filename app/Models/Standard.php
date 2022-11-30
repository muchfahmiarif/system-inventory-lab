<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standard extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function location() {
        return $this->belongsTo(Location::class);
    }

    public function trademark() {
        return $this->belongsTo(Trademark::class);
    }
}
