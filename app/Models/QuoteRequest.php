<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'company',
        'project_type',
        'budget',
        'details',
        'status',
        'ip_address',
        'user_agent',
    ];
}
