<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Church;
use App\Models\Baptismal;
use App\Models\Confirmation;
use App\Models\Marriages;
use App\Models\Death;
use App\Models\Member;

class Parishioner extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function church(){
        return $this->belongsTo(Church::class);
    }

    public function baptismal(){
        return $this->hasOne(Baptismal::class);
    }

    public function confirmation(){
        return $this->hasOne(Confirmation::class);
    }

    public function marriagesAsHusband(){
        return $this->hasOne(Marriage::class, 'husband_id');
    }

    public function marriagesAsWife(){
        return $this->hasOne(Marriage::class, 'wife_id');
    }

    public function death(){
        return $this->hasOne(Death::class);
    }

    public function members(){
        return $this->hasMany(Member::class);
    }
}
