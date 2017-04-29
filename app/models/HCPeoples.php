<?php namespace App\models;

use Illuminate\Database\Eloquent\Model;

class HCPeoples extends CoreModel {

    protected $table = "peoples";
	protected $fillable = ['name','city_id'];



    public function peoplesHobbies()
    {
        return $this->hasMany(HCPeoplesHobbiesConnections::class,'peoples_id','id')->with('hobbies');
//      return HCProjects::where('client_id', '=', $this->id)->get();
    }


    public function hobbiesSyncing() {
        return $this->belongsToMany(HCHobbies::class, 'peoples_hobbies_connections', 'peoples_id', 'hobbies_id');
    }

}
