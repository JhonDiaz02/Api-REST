<?php


namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Autor extends Model
{
	protected $table = 'autor';


	protected $fillable = [
		'nombre',
		'fecha'
	];
}
