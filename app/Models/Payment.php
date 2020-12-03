<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;

    protected $table = "payment";
    
    protected $primaryKey = "payment_id";

    protected $fillable = [ 
        'payment_method', 
        'payment_status',
        'bank_id',
        'status',
    ];

    public function booktour()
    {
        return $this->belongsTo(BookTour::class,'booktour_id','booktour_id');
    }
}
