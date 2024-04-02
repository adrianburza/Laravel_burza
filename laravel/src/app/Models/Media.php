<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        "path",
        "listing_id",
    ];

    public function listing (){
        return $this-> belongsTo(Listing::class);
    }
}
