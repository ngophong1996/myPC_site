<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mypc extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'useremail',
        'class',
        'option',
        'device',
        'image',
        'wifi',
        'total',
        'paymentstate',
      

    ];
}