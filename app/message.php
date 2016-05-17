<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $table = 'messages';

     protected $fillable = ['sent_usr_name','received_usr_name','sent_usr_id','received_usr_id','message','reported','readed'];
}
