<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tokens extends Model
{
    //
    protected $fillable = [
        'target_id', 'type', 'tokens','expired_time'
    ];
    public $timestamps = false;
    public $primaryKey = 'id';

}
