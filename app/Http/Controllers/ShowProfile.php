<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class ShowProfile extends Controller
{
    public function welcome() {
        return "Bienvenidos";
    }

    public function prueba () {
        return view('sami');
    }

    public function prueba1 ($str) {
        return view('sam')->with('str',$str);
    }

    public function nombre ($str1, $str2 = null) {
        if (is_null($str2))
            return "Mi nombre es {$str1} Lara ";
        else
            return "El primer valor es {$str1} y el segundo {$str2}";
    }

    public function tutu () {
        $a = [1, 0, 'gsdgshg'];
        dd($a);
    }

    public function hello () {
        return 'Hello world!';
    }

    public function usuarios () {
        $aUser = User::find(1);
        //foreach ($aUser as $a) {
            //echo $a -> name . " " . $a -> id . " " . $a -> email . "<br>";
        dd($aUser);
    }

    public function buscar ($id) {
        $aUser = User::find($id);
        return view('usuarios')->with('sName',$aUser -> name);
    }
}
