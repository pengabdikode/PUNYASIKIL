<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{

    public $table = 'contact';

    public $fillable = ['name', 'email', 'message'];
    
}
