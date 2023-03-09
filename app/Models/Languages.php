<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    use HasFactory;
    protected $table = 'languages';

    protected $fillable = [
        'name',
        'description',
        'state',
    ];

    // protected $casts = [
    //     'state' => null,
    // ];
}
