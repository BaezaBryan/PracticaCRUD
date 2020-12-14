<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPractica extends Controller
{
    //

public function diego(){
    return view ('diego',[
        'title' => 'Diego Rivera'
    ]);
}
public function davinci(){
    return view ('davinci',[
        'title' => 'Leonardo Da Vinci'
    ]);
}
public function salvador(){
    return view ('salvador',[
        'title' => 'Salvador Dalí'
    ]);
}
public function miguel(){
    return view ('miguel',[
        'title' => 'Miguel Angel'
    ]);
}
public function pablo(){
    return view ('pablo',[
        'title' => 'Pablo Picasso'
    ]);
}
public function login(){
    return view ('login',[
        'title' => 'Login'
    ]);
}
 public function validarlogin(Request $request){
     $user = $request->input('user');
     $pass = $request->input('pass');
     $llave = $request->input('laave');
     if($user === 'proftoledo' && $pass == 12345){
         $url = 'archivo';
     } else {
        $url = 'login';
     }
    return view($url,[
        'title' => 'Pintores'
    ]);
   }
}
