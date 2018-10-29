<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergencies extends Model
{
    protected $table = 'emergencies';
    protected $fillable = ['subject', 'description'];
    public $timestamps = false;
}
