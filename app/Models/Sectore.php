<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sectore
 *
 * @property $id
 * @property $edificio
 * @property $piso
 * @property $sector
 * @property $created_at
 * @property $updated_at
 *
 * @property Impresora[] $impresoras
 * @property Pc[] $pcs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sectore extends Model
{
    
    static $rules = [
		'edificio' => 'required',
		'piso' => 'required',
		'sector' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['edificio','piso','sector'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function impresoras()
    {
        return $this->hasMany('App\Models\Impresora', 'id_sector', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pcs()
    {
        return $this->hasMany('App\Models\Pc', 'id_sector', 'id');
    }
    

}
