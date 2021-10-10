<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subscriptions extends Model
{
    protected $table = 'subscriptions';
    protected $fillable = [
        'email'
    ];
}
