<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PcPrograma
 *
 * @property $id
 * @property $id_pc
 * @property $id_programa
 * @property $created_at
 * @property $updated_at
 *
 * @property Pc $pc
 * @property Programa $programa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PcPrograma extends Model
{
    
    static $rules = [
		'id_pc' => 'required',
		'id_programa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_pc','id_programa'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pc()
    {
        return $this->hasOne('App\Models\Pc', 'id', 'id_pc');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function programa()
    {
        return $this->hasOne('App\Models\Programa', 'id', 'id_programa');
    }
    

}
