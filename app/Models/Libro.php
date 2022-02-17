<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $nombre
 * @property int $idautor
 * 
 * @property Autor $autor
 *
 * @package App\Models
 */
class Libro extends Model
{
	protected $table = 'libro';

	protected $casts = [
		'idautor' => 'int'
	];

	protected $fillable = [
		'nombre',
		'idautor'
	];

	public function autor()
	{
		return $this->belongsTo(Autor::class, 'idautor');
	}
}
