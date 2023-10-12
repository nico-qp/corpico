<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Impresora
 *
 * @property $id
 * @property $id_sector
 * @property $id_criticidad
 * @property $marca
 * @property $modelo
 * @property $conectividad
 * @property $ip
 * @property $autonomia_resma
 * @property $id_estado
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property ComputadorasImpresora[] $computadorasImpresoras
 * @property ConsumiblesImpresora[] $consumiblesImpresoras
 * @property Criticidade $criticidade
 * @property Sectore $sectore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Impresora extends Model
{
    
    static $rules = [
		'id_sector' => 'required',
		'id_criticidad'=> 'required',
		'marca' => 'required',
		'modelo' => 'required',
		'conectividad',
		'ip',
		'autonomia_resma',
		'id_estado' => 'required',
		'observaciones',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_sector','id_criticidad','marca','modelo','conectividad','ip','autonomia_resma','id_estado','observaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function computadorasImpresoras()
    {
        return $this->hasMany('App\Models\ComputadorasImpresora', 'id_impresora', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consumiblesImpresoras()
    {
        return $this->hasMany('App\Models\ConsumiblesImpresora', 'id_impresora', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function criticidade()
    {
        return $this->hasOne('App\Models\Criticidade', 'id', 'id_criticidad');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sectore()
    {
        return $this->hasOne('App\Models\Sectore', 'id', 'id_sector');
    }
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'id_estado');
    }
    

}
