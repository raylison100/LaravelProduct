<?php

namespace App\Modell\Panel;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $fillable = [
      'name', 'number', 'active', 'category', 'description'
    ];

    public $rules = [
        'name'          => 'required|min:3|max:100',
        'number'        => 'required|numeric',
        'category'      => 'required',
        'description'   => 'min:3|max:1000'
    ];
}
