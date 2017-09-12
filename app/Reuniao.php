<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reuniao extends Model
{
    protected $fillable = ['nome', 'data_reuniao', 'hora_reuniao', 'descricao'];

}
