<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Church;
use App\Models\Parishioner;
use App\Models\Godparent;

class Baptismal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function church(){
        return $this->belongsTo(Church::class);
    }

    public function parishioner(){
        return $this->belongsTo(Parishioner::class);
    }

    public function godparents(){
        return $this->hasMany(Godparent::class);
    }
}
