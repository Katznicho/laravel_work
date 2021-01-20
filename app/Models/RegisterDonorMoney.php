<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterDonorMoney extends Model
{
    use HasFactory;
    protected $fillable = [
        'donor_name',
        'amount',
        'user_id'
    ];
    
}
