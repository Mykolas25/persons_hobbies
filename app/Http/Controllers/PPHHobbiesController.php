<?php namespace App\Http\Controllers;

use App\models\HCHobbies;
use Illuminate\Routing\Controller;

class PPHHobbiesController extends Controller {


	public function showCreate()
	{
	    return view('hobbiesForm');
	}
	public function create()
	{
        $data = request()->all();
        $record = HCHobbies::create($data);
//        dd('Irašas ' . $_POST['name'] . ' sukurtas');
        //$data['name'] = $data['city']; jei formoje imputname skiriasi nuo duombazes name

        return view('hobbiesForm', $record->toArray());
	}





	/**
	 * Store a newly created resource in storage.
	 * POST /pphhobbies
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pphhobbies/{id}
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
	 * GET /pphhobbies/{id}/edit
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
	 * PUT /pphhobbies/{id}
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
	 * DELETE /pphhobbies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}