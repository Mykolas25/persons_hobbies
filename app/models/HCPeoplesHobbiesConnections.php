<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class HCPeoplesHobbiesConnections extends CoreModel {

    protected $table = "peoples_hobbies_connections";
    protected $fillable = ['hobbies_id','peoples_id'];

}
