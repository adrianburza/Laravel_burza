<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncludedInPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        "listing_id"
    ];

    public function listing (){
        return $this-> belongsTo(Listing::class);
    }
}
