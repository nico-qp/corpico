<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cartucho
 *
 * @property $id
 * @property $color
 * @property $codigo
 * @property $uso_mensual
 * @property $uso_semestral
 * @property $uso_anual
 * @property $marca_impresora
 * @property $modelo_impresora
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cartucho extends Model
{
    
    static $rules = [
		'color' => 'required',
		'codigo' => 'required',
		'uso_mensual' => 'required',
		'uso_semestral' => 'required',
		'uso_anual' => 'required',
		'marca_impresora' => 'required',
		'modelo_impresora' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['color','codigo','uso_mensual','uso_semestral','uso_anual','marca_impresora','modelo_impresora'];



}
