<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ages extends Model
{
    protected $fillable = [
        'ages_id',
        'display_name',
    ];
}
