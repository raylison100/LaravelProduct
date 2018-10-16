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

        $title = "Listagem de produtos";
        $produtos = $this->produto-> all();

        return view('painel.produtos.index', compact('produtos', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = " Cadastrar novo produto";
        $category = ['eletronicos', 'moveis', 'limpeza', 'banho'];
        return view('painel.produtos.create', compact('title','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "cadastrando....";
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
        /*
        $prod =  $this->produto;
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


        /*$insert = $this->produto->create([

           'name'       =>'Niojasdhash',
           'number'     =>8789798,
           'active'     =>true,
           'category'   =>'moveis',
           'description'=>'uaysgdyagdiyasidyasuydiausdfyayisdiasfdiytaf'
        ]);

        if($insert)
            return "Inserido com sucesso, ID: {$insert->id}";
        else
            return 'Falha ao cadatrar';*/

/*
      //  $prod = $this->produto->where('number',65467986 );
        $prod = $this->produto->find(5);
        $update = $prod->update([
                'name'      => 'Update Teste',
                'number'    => 65467986,
                'active'    => true,
        ]);

        if($update)
            return "Atualizado  com sucesso, ID: {$prod->id}";
        else
            return 'Falha ao atualizar';
        */

        $prod = $this->produto->find(4);
        $delete = $prod->delete();

        if($delete){
            return "deletado com sucesso";
        }else {
            return "Não encontrado";
        }

    }
}
