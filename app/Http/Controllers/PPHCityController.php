<?php namespace App\Http\Controllers;

use App\models\HCCity;
use Illuminate\Routing\Controller;

class PPHCityController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pphcity
	 *
	 * @return Response
	 */

	public function create()
    {
        $data = request()->all();
        HCCity::create($data);
        dd('Miestas ' . $_POST['name'] . ' sukreatinta');
        //$data['name'] = $data['city']; jei formoje imputname skiriasi nuo duombazes name



    }

	public function showCreate()
	{
		return view('form');
	}










	/**
	 * Store a newly created resource in storage.
	 * POST /pphcity
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pphcity/{id}
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
	 * GET /pphcity/{id}/edit
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
	 * PUT /pphcity/{id}
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
	 * DELETE /pphcity/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}