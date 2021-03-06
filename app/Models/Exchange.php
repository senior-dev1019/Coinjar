<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'exchange1',
        'exchange2',
        'exchange3',
        'exchange4',
        'exchange5',
    ];
}
