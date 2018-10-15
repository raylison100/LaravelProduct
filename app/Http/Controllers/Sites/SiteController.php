<?php

namespace App\Http\Controllers\Sites;

use Illuminate\Http\Request;
use  App\Http\Controllers\Controller;

class SiteController extends Controller
{

    public function  __construct()
    {
        $this->middleware('auth')
            ->only([
                'categoria'
            ]);
    }

    public function index(){
        return view('welcome');
    }

    public function home(){

        $var1 = 123;
        $arrayData = [1,2,3,4,5];

        return view('sites.home.index', compact('var1', 'arrayData'));
    }

    public function contato(){
        return view('sites.contato.contato');
    }

    public function categoria($idCat){
        return  "ID categoria   {$idCat}";
    }

    public function categoria2($idCat = null){
        return  "ID categoria2   {$idCat}";
    }
}
