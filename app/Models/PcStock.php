<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PcStock
 *
 * @property $id
 * @property $numero
 * @property $marca
 * @property $condicion
 * @property $cantidad
 * @property $ubicacion
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PcStock extends Model
{
    
    static $rules = [
		'numero' => 'required',
		'marca' => 'required',
		'condicion' => 'required',
		'cantidad' => 'required',
		'ubicacion' => 'required',
		'observaciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero','marca','condicion','cantidad','ubicacion','observaciones'];



}
