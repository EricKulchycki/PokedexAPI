<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainers extends Model
{
    protected $table = 'trainers';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'email';
}