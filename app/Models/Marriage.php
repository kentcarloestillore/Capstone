<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Church;
use App\Models\Parishioner;
use App\Models\MarriageSponsor;


class Marriage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function church(){
        return $this->belongsTo(Church::class);
    }

    public function husband(){
        return $this->belongsTo(Parishioner::class , 'husband_id');
    }

    public function wife(){
        return $this->belongsTo(Parishioner::class , 'wife_id');
    }

    public function sponsors(){
        return $this->hasMany(MarriageSponsor::class);
    }
}
