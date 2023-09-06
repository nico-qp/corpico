<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ImpresoraStock
 *
 * @property $id
 * @property $marca
 * @property $modelo
 * @property $cantidad
 * @property $ubicacion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ImpresoraStock extends Model
{
    
    static $rules = [
		'marca' => 'required',
		'modelo' => 'required',
		'cantidad' => 'required',
		'ubicacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['marca','modelo','cantidad','ubicacion'];



}
