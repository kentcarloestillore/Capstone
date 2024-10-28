<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marriage;

class MarriageSponsor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function marriage(){
        return $this->belongsTo(Marriage::class);
    }
}
