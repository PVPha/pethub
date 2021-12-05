<?php

namespace App\Http\Controllers;

use App\Models\Pets;
use App\Models\supplies;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return redirect('admin/pets');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pets()
    {
        //
        $dataPets = DB::table("pets")
            ->selectRaw("id,name,types,sex,age,price,img")->paginate(10);
        //return view("pages.admin.listDatabase", ["dataPets" => $dataPets]);
        return view("pages.admin.pets", ["dataPets" => $dataPets]);
        // print_r($dataPets);
    }


    public function supplies()
    {
        //

        $dataPets = DB::table("supplies")
            ->selectRaw("id,name,types,price,img")->paginate(10);
        //return view("pages.admin.listDatabase", ["dataPets" => $dataPets]);
        return view("pages.admin.supplies", ["dataSupplies" => $dataPets]);
        // print_r($dataPets);
    }


    public function showDialog(Request $request)
    {
        $action = $request->input("action");
        $data = null;

        if ($action == "edit") {
            $maSV = $request->input("id");
            $data = DB::table("pets")
                ->selectRaw("id,name,types,price,img")
                ->where("id", $maSV)->first();
            //$data->ma_sinh_vien = $data->masv;
        }
        return view("pages.admin.dialog_pet", ["action" => $action, "data" => $data]);
    }

    public function showDialog2(Request $request)
    {
        $action = $request->input("action");
        $data = null;

        if ($action == "edit") {
            $maSV = $request->input("id");
            $data = DB::table("pets")
                ->selectRaw("id,name,types,price,img")
                ->where("id", $maSV)->first();
            //$data->ma_sinh_vien = $data->masv;
        }
        return view("pages.admin.dialog_pet", ["action" => $action, "data" => $data]);
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
        if ($request->form == 'pets') {
            $pets = new Pets;
            $pets->name = $request->name;
            switch ($request->type) {
                case 'chó':
                    $pets->types = 'dog';
                    break;
                case 'mèo':
                    $pets->types = 'cat';
                    break;
                case 'đồ chơi':
                    $pets->types = 'toy';
                    break;
                case 'thức ăn':
                    $pets->types = 'food';
                    break;
                default:
                    $pets->types = 'dog';
                    break;
            }
            $pets->sex = $request->sex;
            $pets->age = $request->age;
            $pets->price = $request->price;

            $filename = time() . '.' . $request->img->getClientOriginalExtension();
            request()->img->move(public_path('images'), $filename);

            $pets->img = $filename;
            $pets->save();
            return redirect('admin/pets');
        } else {
            $pets = new Supplies;
            $pets->name = $request->name;
            switch ($request->type) {
                case 'chó':
                    $pets->types = 'dog';
                    break;
                case 'mèo':
                    $pets->types = 'cat';
                    break;
                case 'đồ chơi':
                    $pets->types = 'toy';
                    break;
                case 'thức ăn':
                    $pets->types = 'food';
                    break;
                default:
                    $pets->types = 'dog';
                    break;
            }
            $pets->price = $request->price;

            $filename = time() . '.' . $request->img->getClientOriginalExtension();
            request()->img->move(public_path('images'), $filename);

            $pets->img = $filename;
            $pets->save();
            return redirect('admin/supplies');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = DB::table("pets")
            ->selectRaw("id,name,types,sex,age,price,img")->where('id', $id)->get();
        //print_r($data[0]->id);
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show2($id)
    {
        //
        $data = DB::table("supplies")
            ->selectRaw("id,name,types,price,img")->where('id', $id)->get();
        //print_r($data[0]->id);
        return $data;
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
        if ($request->form == 'pets') {
            $pets = Pets::find($id);
            $pets->name = $request->name;
            switch ($request->type) {
                case 'chó':
                    $pets->types = 'dog';
                    break;
                case 'mèo':
                    $pets->types = 'cat';
                    break;
                case 'đồ chơi':
                    $pets->types = 'toy';
                    break;
                case 'thức ăn':
                    $pets->types = 'food';
                    break;
                default:
                    $pets->types = 'dog';
                    break;
            }
            $pets->sex = $request->sex;
            $pets->age = $request->age;
            $pets->price = $request->price;
            if ($request->img != null) {
                $filename = time() . '.' . $request->img->getClientOriginalExtension();
                request()->img->move(public_path('images'), $filename);

                $pets->img = $filename;
            }

            $pets->save();
            return redirect('admin/pets');
        } else {
            $pets = Supplies::find($id);
            $pets->name = $request->name;
            switch ($request->type) {
                case 'chó':
                    $pets->types = 'dog';
                    break;
                case 'mèo':
                    $pets->types = 'dog';
                    break;
                case 'đồ chơi':
                    $pets->types = 'toy';
                    break;
                case 'thức ăn':
                    $pets->types = 'food';
                    break;
                default:
                    $pets->types = 'dog';
                    break;
            }

            $pets->price = $request->price;
            if ($request->img != null) {
                $filename = time() . '.' . $request->img->getClientOriginalExtension();
                request()->img->move(public_path('images'), $filename);

                $pets->img = $filename;
            }

            $pets->save();
            return redirect('admin/supplies');
        }
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
        $pets = Pets::find($id);
        $pets->delete();
        return redirect('admin/pets');;
    }
    public function destroy2($id)
    {
        //
        $pets = Supplies::find($id);
        $pets->delete();
        return redirect('admin/supplies');;
    }
}