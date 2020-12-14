<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
class poetcontroller extends Controller
{
    public function index()
    {
        $user = DB::table('poet')
        ->orderBy('firstname')
        ->get();
        return view('crud.showUsuarios',[
            'usuarios' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.altaPoeta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = DB::table('poet')
        ->insert([
           'firstname'=>$request->input('firstname'),
           'surname'=>$request->input('surname'),
           'adress'=>$request->input('address'),
           'postcode'=>$request->input('postcode'),
           'telephonenumeber'=>$request->input('telephonenumber')
      ]);
      return redirect()->action('poetcontroller@index')
      ->with('Status','Poeta Creado Exitosamente');
    }

    public function show($id)
    {
        $user = DB::table('poet')
        ->where('poetcode','=',$id)
        ->first();

        return view('crud.altaPoeta',['user' => $user]);
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
    public function update(Request $request)
    {
        $user = DB::table('poet')
        ->where('poetcode','=',$request->input('id'))
        ->update([
           'firstname'=>$request->input('firstname'),
           'surname'=>$request->input('surname'),
           'adress'=>$request->input('address'),
           'postcode'=>$request->input('postcode'),
           'telephonenumeber'=>$request->input('telephonenumber')
      ]);

      return redirect()->action('poetcontroller@index')
        ->with('Status','Poeta Modificado Exitosamente');
    }


    public function destroy($id)
    {
        $user = DB::table('poet')
          ->where('poetcode', '=', $id)
          ->delete();
      return redirect()->action('poetcontroller@index')
        ->with('Status','Poeta Eliminado Exitosamente');
    }
}
