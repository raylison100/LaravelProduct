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

    public function categoria($idCat){
        return  "ID categoria   {$idCat}";
    }

    public function categoria2($idCat = null){
        return  "ID categoria2   {$idCat}";
    }
}
