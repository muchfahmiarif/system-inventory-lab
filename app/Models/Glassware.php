<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glassware extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function shape() {
        return $this->belongsTo(Shape::class);
    }

    public function color() {
        return $this->belongsTo(Color::class);
    }
}
