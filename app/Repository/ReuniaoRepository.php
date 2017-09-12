<?php namespace App\Repository;

use \App\Reuniao as Reuniao;
use Carbon\Carbon;

Class ReuniaoRepository implements IReuniaoRepository{
    
    public function reuniaos($search){

        if(!is_null($search) && !empty($search)){
            $reuniaos = Reuniao::where('nome', 'like', '%'.$search.'%')
            ->paginate(6);
        }else{
            $reuniaos = Reuniao::paginate(6);
        }

        return $reuniaos;
    }

    public function store($input){
        $reuniao = new Reuniao();

        $reuniao->nome = $input['nome'];
        $reuniao->data_reuniao = Carbon::createFromFormat('d/m/Y', $input['data_reuniao']);
        $reuniao->hora_reuniao = $input['hora_reuniao'];
        $reuniao->descricao = $input['descricao'];

        $result = $reuniao->save();

        return $result;
    }
}