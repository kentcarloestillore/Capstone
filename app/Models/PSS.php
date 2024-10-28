<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;
use App\Models\Receipt;

class PSS extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function member(){
        return $this->belongsTo(Member::class);
    }

    public function receipt(){
        return $this->belongsTo(Receipt::class);
    }
}
