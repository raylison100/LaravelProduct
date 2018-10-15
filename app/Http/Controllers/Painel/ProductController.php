<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modell\Panel\Produto;

class ProductController extends Controller
{
    private $produto;

    public function __construct()
    {
        $this->produto = new Produto();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $produtos = $this->produto-> all();

        return view('painel.produtos.index', compact('produtos'));
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
        //
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

    public function testes(){
        /*$prod =  $this->produto;
        $prod->name = "Nome do produto";
        $prod->number = 6549797;
        $prod->active = true;
        $prod->category =  'moveis';
        $prod->description = 'descrução do produto';
        $insert = $prod->save();

        if($insert)
            return 'Inserido com sucesso';
        else
            return 'Falha ao cadatrar';*/


        $insert = $this->produto->create([

           'name'       =>'Niojasdhash',
           'number'     =>8789798,
           'active'     =>true,
           'category'   =>'moveis',
           'description'=>'uaysgdyagdiyasidyasuydiausdfyayisdiasfdiytaf'
        ]);

        if($insert)
            return "Inserido com sucesso, ID: {$insert->id}";
        else
            return 'Falha ao cadatrar';
    }
}
