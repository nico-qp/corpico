<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComputadorasImpresora
 *
 * @property $id
 * @property $id_computadora
 * @property $id_impresora
 * @property $created_at
 * @property $updated_at
 *
 * @property Computadora $computadora
 * @property Impresora $impresora
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ComputadorasImpresora extends Model
{
    
    static $rules = [
		'id_computadora' => 'required',
		'id_impresora' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_computadora','id_impresora'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function computadora()
    {
        return $this->hasOne('App\Models\Computadora', 'id', 'id_computadora');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function impresora()
    {
        return $this->hasOne('App\Models\Impresora', 'id', 'id_impresora');
    }
    

}
