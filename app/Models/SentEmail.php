<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;

class SentEmail extends Model
{
    use Filterable;

    protected $fillable = [
        'hash',
        'headers',
        'sender',
        'recipient',
        'subject',
        'content',
        'opens',
        'clicks',
        'message_id',
        'meta' 
    ];
}

