<?php

namespace App\Http\Controllers;

use App\models\HCPeoples;
use App\models\HCCity;
use App\models\HCHobbies;
use App\models\HCPeoplesHobbiesConnections;
use Illuminate\Routing\Controller;
use Ramsey\Uuid\Uuid;

class PPHPeoplesController extends Controller {


    public function index()
    {

        return HCPeoples::with(['peoplesHobbies'])->get();
        $configuration = [];
        $configuration["peoples"] = HCPeoples::with(['peoplesHobbies'])->get();
//        $configuration["totalCount"] = sizeof($configuration['clients']);
        dd($configuration);
        return view('main', $configuration);
    }


    public function showCreate()
    {
        $config = [];
        $config['hobbies'] = HCHobbies::pluck('name', 'id');
        $config['cities'] = HCCity::pluck('name', 'id');
        return view('peoplesForm', $config);
    }




//    public function index()
//    {
//       dd(HCCity::pluck('id'));
//    }



    public function create()
    {

        $data = request()->all();

//       dd($data);

        $record = HCPeoples::create([
            'name' => $data['name'],
            'city_id' => $data['city_id']
        ]);

//        dd($data);
        $record->hobbiesSyncing()->sync($data['hobbies']);

    }




//        foreach($_POST['hobbies'] as $hobby)
//        {
//            $record[] = HCPeoplesHobbiesConnections::create([
//
//                        'hobbies_id' => $hobby,
//                        'peoples_id'=> HCPeoples:: where('name', '=', $_POST['name'])->get()->random()->id
//                        ]);
//        }
//                        dd($record);
//        dd('Irašas ' . $_POST['name'] . " ir įrašas " . $_POST['city'] .' sukurtas');
//        //$data['name'] = $data['city']; jei formoje imputname skiriasi nuo duombazes name






    /**
	 * Store a newly created resource in storage.
	 * POST /pphpeoples
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pphpeoples/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pphpeoples/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pphpeoples/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pphpeoples/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}