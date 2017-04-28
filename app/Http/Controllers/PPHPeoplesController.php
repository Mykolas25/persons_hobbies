<?php namespace App\Http\Controllers;

use App\models\HCPeoples;
use App\models\HCCity;
use Illuminate\Routing\Controller;

class PPHPeoplesController extends Controller {


    public function showCreate()
    {
        return view('peoplesForm');
    }
    public function create()
    {
        HCPeoples::create([
            'name' => $_POST['name'],
            'city_id' => HCCity::where('name', '=', $_POST['city'])->get()->random()->id
        ]);
        dd('Irašas ' . $_POST['name'] . " ir įrašas " . $_POST['city'] .' sukurtas');
        //$data['name'] = $data['city']; jei formoje imputname skiriasi nuo duombazes name
    }



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
	public function show($id)
	{
		//
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