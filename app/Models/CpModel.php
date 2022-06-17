<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CpModel extends Model
{
    use HasFactory;
    protected $table = 'cp';
    protected $fillable = [
        'nama',
        'nowa'
    ];
}
