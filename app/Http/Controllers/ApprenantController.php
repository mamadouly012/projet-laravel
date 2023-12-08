<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Apprenant;

class ApprenantController extends Controller
{
    //
    public function index(){
        $apprenants = Apprenant::all();
        return view('apprenant', ['apprenants' => $apprenants]);
        
    }
}
