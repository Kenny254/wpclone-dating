<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    protected $table = 'report';

    protected $fillable = ['reported_by_id','reported_user_id','reported_by','reported_user','reason','resolved','readed'];
}
