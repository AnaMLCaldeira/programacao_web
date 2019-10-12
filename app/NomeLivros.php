<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NomeLivros extends Model
{
    protected $fillable = ['nome', 'autor', 'descricao' ];
    protected $guarded = ['id'];
}
