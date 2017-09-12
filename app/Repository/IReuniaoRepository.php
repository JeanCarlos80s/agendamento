<?php namespace App\Repository;

interface IReuniaoRepository{

	public function reuniaos($search);
	public function store($input);

}