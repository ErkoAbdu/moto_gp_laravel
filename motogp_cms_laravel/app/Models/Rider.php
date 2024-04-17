<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rider extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'fname',
        'lname',
        'team',
        'manufacturer_id',
        'nationality',
        'imageURL',
    ];

    public function manufacturers(){
        return $this -> belongsTo(Manufacturer::class);
    }
}
