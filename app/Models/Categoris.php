<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoris extends Model
{
    use HasFactory;
    const STATUS_DRAFT = 'STATUS_DRAFT';
    const STATUS_PUBLISHED = 'STATUS-PUBLISHED';

    protected $fillable = [
        'title',
        'name',
        'image',
        'describe',
        'status'
    ];
}
