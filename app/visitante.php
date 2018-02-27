<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitante extends Model
{

	protected $fillable = [
		'name','email','cellphone','birthday', 'endereco','bairro', 'cidade', 'uf'
	];
}
