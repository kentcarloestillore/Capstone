<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PSS;
use App\Models\Pamisa;
use App\Models\Church;

class Receipt extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pss(){
        return $this->hasMany(PSS::class);
    }

    public function pamisa(){
        return $this->hasMany(Pamisa::class);
    }

    public function church(){
        return $this->belongsTo(Church::class);
    }
}
