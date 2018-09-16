<?php

namespace App\Http\Controllers;
use App\Crud;
use Storage;
use Illuminate\Http\Request;
class crudsController extends Controller
{
    public function index(){
        // $data = Crud::all();
        // return view('cruds.index', compact('data'));
        return view('cruds.create');
    }

    public function create(){
        return view('cruds.create');
    }

    public function store(Request $request){
        $data = new Crud();
		$data->nama = $request->nama;
        $data->email = $request->email;
        // $data->date_of_birth = $request->date_of_birth->format('Y/m/d');;
        $data->date_of_birth = date('Y/m/d', strtotime($request->date_of_birth));
		$data->alamat = $request->alamat;
        $data->save();

        // $thecsv = implode(',', $data);
        $thecsv = $data->nama.','.$data->email.','.$data->date_of_birth.','.$data->alamat;


        $x = date('YmdHis');
        $filename = str_replace(' ', '', $data->nama);
        Storage::put($filename.'-'.$x.'.txt', $thecsv);
		return view('cruds.thanks');
    }

    
}
