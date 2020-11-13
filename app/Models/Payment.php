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

    public function booktours()
    {
        return $this->hasMany(BookTour::class,'payment_id','payment_id');
    }

    public function bankaccount()
    {
        return $this->belongsTo(BankAccount::class,'bank_id','bank_id');
    }
}
