<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model

{

    // public $timestamps = true;

    protected $table = 'contacts';

    protected $fillable = ['name','phone'];

}