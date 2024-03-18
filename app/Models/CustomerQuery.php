<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(mixed $validated)
 */
class CustomerQuery extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'phone',
        'project_detail'
    ];
}
