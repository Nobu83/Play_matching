<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'fullname',
        'gender',
        'ages_id',
        'email',
        'mail_letter',
        'comment',
    ];
}
