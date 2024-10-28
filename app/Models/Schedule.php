<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Church;

class Schedule extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function church(){
        return $this->belongsTo(Church::class);
    }
}
