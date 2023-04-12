<?php

namespace App\Models;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public $timestamps = true; // disable automatic timestamping

    protected $fillable = [
        'id_user',
        'montant',
        'txid',
        'type',


    ];
}
