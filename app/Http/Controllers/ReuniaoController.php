<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests\ReuniaoRequest as Request;
//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repository\IReuniaoRepository as Repository;

class ReuniaoController extends Controller
{

    protected $repository;

    function __construct(Repository $repository){
        $this->repository = $repository;
    }
    
    public function index()
    {
        $search = \Request::get('search');

        $reuniaos = $this->repository->reuniaos($search);
        return view('reuniaos.index')->with(compact('reuniaos', 'search'));
    }

    public function novo()
    {
        return view('reuniaos.form');
    }

    public function store(Request $request)
    {
        $result = $this->repository->store($request->all());

        if(!$result){
            return redirect()->back()->withInput()->withErrors(['Erro ao salvar']);
        }
        
        return redirect()->back()->with('success', 'Tudo foi salvo');
    }

    
}
