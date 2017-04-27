<?php namespace App\models;

use Illuminate\Database\Eloquent\Model;

class HCPeoples extends CoreModel {

    protected $table = "peoples";
	protected $fillable = ['name','city_id'];

}
