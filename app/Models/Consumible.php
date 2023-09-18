<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consumible
 *
 * @property $id
 * @property $id_uso
 * @property $id_tipo
 * @property $codigo
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property ConsumiblesImpresora[] $consumiblesImpresoras
 * @property TipoConsumible $tipoConsumible
 * @property Uso $uso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consumible extends Model
{
    
    static $rules = [
		'id_uso' => 'required',
		'id_tipo' => 'required',
		'codigo' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_uso','id_tipo','codigo','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consumiblesImpresoras()
    {
        return $this->hasMany('App\Models\ConsumiblesImpresora', 'id_consumible', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoConsumible()
    {
        return $this->hasOne('App\Models\TipoConsumible', 'id', 'id_tipo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function uso()
    {
        return $this->hasOne('App\Models\Uso', 'id', 'id_uso');
    }
    

}
