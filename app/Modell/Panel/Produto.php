<?php

namespace App\Modell\Panel;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $fillable = [
      'name', 'number', 'active', 'category', 'description'
    ];
}
