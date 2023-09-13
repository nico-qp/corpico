<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PcImp
 *
 * @property $id
 * @property $id_pc
 * @property $id_imp
 * @property $created_at
 * @property $updated_at
 *
 * @property Impresora $impresora
 * @property Pc $pc
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PcImp extends Model
{
    
    static $rules = [
		'id_pc' => 'required',
		'id_imp' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_pc','id_imp'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function impresora()
    {
        return $this->hasOne('App\Models\Impresora', 'id', 'id_imp');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pc()
    {
        return $this->hasOne('App\Models\Pc', 'id', 'id_pc');
    }
    

}
