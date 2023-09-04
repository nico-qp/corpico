<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tonner
 *
 * @property $id
 * @property $modelo
 * @property $uso_mensual
 * @property $uso_semestral
 * @property $uso_anual
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tonner extends Model
{
    
    static $rules = [
		'modelo' => 'required',
		'uso_mensual' => 'required',
		'uso_semestral' => 'required',
		'uso_anual' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['modelo','uso_mensual','uso_semestral','uso_anual'];



}
