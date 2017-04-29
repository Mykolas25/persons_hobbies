<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class HCPeoplesHobbiesConnections extends CoreModel {

    protected $table = "peoples_hobbies_connections";
    protected $fillable = ['hobbies_id','peoples_id'];




    public function hobbies()
    {
        return $this->hasOne(HCHobbies::class,'id','hobbies_id');
//      return HCProjects::where('client_id', '=', $this->id)->get();
    }



}
