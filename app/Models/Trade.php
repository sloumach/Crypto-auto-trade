<?php

namespace App\Models;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

    public $timestamps = true; // disable automatic timestamping

    protected $fillable = [
        'id_client',
        'duration',
        'range_trade',
        'crypto',
        'profit',




    ];
}
