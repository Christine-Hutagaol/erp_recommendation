<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherRequirement extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function erp(){
        return $this->belongsTo(Erp::class);
    }
}
