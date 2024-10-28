<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chapel;
use App\Models\Member;
use App\Models\Parishioner;

class Cluster extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function chapel(){
        return $this->belongsTo(Chapel::class);
    }

    public function members(){
        return $this->hasMany(Member::class);
    }
}
