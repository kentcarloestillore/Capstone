<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Confirmation;

class ConfirmationSponsor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function confirmation(){
        return $this->belongsTo(Confirmation::class);
    }
}
