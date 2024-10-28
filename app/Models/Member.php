<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parishioner;
use App\Models\Cluster;

class Member extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function parishioner(){
        return $this->belongsTo(Parishioner::class);
    }

    public function cluster(){
        return $this->belongsTo(Cluster::class);
    }

    public function pss(){
        return $this->hasMany(Member::class);
    }
}
