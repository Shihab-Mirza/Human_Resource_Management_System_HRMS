<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
   protected $fillable =[
    'title',
    'notice_to',
    'message',
    'date',
   ];
}
