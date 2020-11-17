<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankAccount extends Model
{
    use SoftDeletes;

    protected $table = "bankaccount";
    
    protected $primaryKey = "bank_id";

    protected $fillable = [ 
        'user_id', 
        'bank_name',
        'status',
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class, 'bank_id', 'bank_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
