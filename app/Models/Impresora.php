<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Impresora
 *
 * @property $id
 * @property $id_sector
 * @property $marca
 * @property $modelo_imp
 * @property $conexion
 * @property $nom_ip
 * @property $cartucho_toner
 * @property $modelo_cart_ton
 * @property $autonomia_resma
 * @property $autonomia_cart_ton
 * @property $uso
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Sectore $sectore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Impresora extends Model
{
    
    static $rules = [
		'id_sector' => 'required',
		'marca' => 'required',
		'modelo_imp' => 'required',
		'conexion' => 'required',
		'nom_ip' => 'required',
		'cartucho_toner' => 'required',
		'modelo_cart_ton' => 'required',
		'autonomia_resma' => 'required',
		'autonomia_cart_ton' => 'required',
		'uso' => 'required',
		'observaciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_sector','marca','modelo_imp','conexion','nom_ip','cartucho_toner','modelo_cart_ton','autonomia_resma','autonomia_cart_ton','uso','observaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sectore()
    {
        return $this->hasOne('App\Models\Sectore', 'id', 'id_sector');
    }
    

}
