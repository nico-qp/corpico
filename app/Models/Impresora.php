<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Impresora
 *
 * @property $id
 * @property $id_cart_ton
 * @property $id_sector
 * @property $id_pc
 * @property $marca
 * @property $modelo
 * @property $conexion
 * @property $nom_ip
 * @property $autonomia_resma
 * @property $autonomia_cart_ton
 * @property $uso
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property CartTon $cartTon
 * @property ImpSector[] $impSectors
 * @property Pc $pc
 * @property PcImp[] $pcImps
 * @property Sectore $sectore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Impresora extends Model
{
    
    static $rules = [
		'id_cart_ton' => 'required',
		'id_sector' => 'required',
		'id_pc' => 'required',
		'marca' => 'required',
		'modelo' => 'required',
		'conexion' => 'required',
		'nom_ip' => 'required',
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
    protected $fillable = ['id_cart_ton','id_sector','id_pc','marca','modelo','conexion','nom_ip','autonomia_resma','autonomia_cart_ton','uso','observaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cartTon()
    {
        return $this->hasOne('App\Models\CartTon', 'id', 'id_cart_ton');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function impSectors()
    {
        return $this->hasMany('App\Models\ImpSector', 'id_impresora', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pc()
    {
        return $this->hasOne('App\Models\Pc', 'id', 'id_pc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pcImps()
    {
        return $this->hasMany('App\Models\PcImp', 'id_imp', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sectore()
    {
        return $this->hasOne('App\Models\Sectore', 'id', 'id_sector');
    }
    

}
