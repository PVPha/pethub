<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $dataDogs = DB::table("pets")
            ->selectRaw("id,name,types,price,img")->where('types', 'dog')->paginate(12);
        $dataCats = DB::table("pets")
            ->selectRaw("id,name,types,price,img")->where('types', 'cat')->paginate(12);
        $dataFoods = DB::table("supplies")
            ->selectRaw("id,name,types,price,img")->where('types', 'food')->paginate(12);
        $dataToys = DB::table("supplies")
            ->selectRaw("id,name,types,price,img")->where('types', 'toy')->paginate(12);
        return view("pages.index", ["dataDogs" => $dataDogs, 'dataCats' => $dataCats, 'dataFoods' => $dataFoods, 'dataToys' => $dataToys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        $data = DB::table("pets")
            ->selectRaw("id,name,types,sex,age,price,img")->where('id', $id)->get();
        //print_r($data[0]->id);
        return view("pages.detail", ['detail' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}