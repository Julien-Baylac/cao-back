<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Birdhouses;
use App\Type_Birdhouses;
use Auth;

class BirdhousesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getBirdhouses() {
        // recuperer les datas de la cabane
        $birdhouses = Birdhouses::all();
        // recuperer le type de la cabane
            // foreach($birdhouses as $birdhouse) {
            //     $birdhouse->types_birdhouses = $birdhouse->types_birdhouses()->get();
            // }
        // renvoyer les données sous forme d'un json
        return response()->json($birdhouses);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = Auth::User();
        $birdhouses = Birdhouses::insertGetId(
            ['name' => $request->name,
             'image' => $request->pathImage,
             'description' => $request->description,
             'adresse' => $request->ville,
             'id_type' => $request->type,
             'latitude' => $request->latitude,
             'longitude' => $request->longitude
             ]
        );
        return $birdhouses;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $birdhouses = Birdhouses::findOrFail($request->id);
        return response()->json($birdhouses);
    }

    public function showAll(Request $request)
    {
        $birdhouses = Birdhouses::all();
        return response()->json($birdhouses);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::User();
        $birdhouses = Birdhouses::find($id);

            $birdhouses->name = $request->get('name');
            $birdhouses->description = $request->get('description');
            $birdhouses->id_type = $request->get('type');
            $birdhouses->save();

            return response()->json($birdhouses, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Birdhouses::findOrFail($id)->delete();
    }
}
