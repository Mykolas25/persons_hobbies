<?php namespace App\Http\Controllers;

use App\models\HCPeoples;
use App\models\HCCity;
use App\models\HCHobbies;
use App\models\HCPeoplesHobbiesConnections;
use Illuminate\Routing\Controller;


class PPHPeoplesController extends Controller {


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
     //   $data = request()->all();

        $record = HCPeoples::create([
            'name' => $_POST['name'],
            'city_id' => $_POST['City'],

                HCPeoplesHobbiesConnections::create([
                    'hobbies_id' => $_POST['Hobbies'],
                    'peoples_id' => Uuid::uuid4()

                   //'peoples_id'=> HCPeoples::where('id', '=', $_POST['name'])->get()->random()->id
            ])
            //'city_id' => HCCity::where('name', '=', $_POST['city'])->get()->random()->id
        ]);
//        dd('Irašas ' . $_POST['name'] . " ir įrašas " . $_POST['city'] .' sukurtas');
//        //$data['name'] = $data['city']; jei formoje imputname skiriasi nuo duombazes name


        return view('peoplesForm', $record->toArray());
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