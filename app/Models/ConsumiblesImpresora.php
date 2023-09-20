<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConsumiblesImpresora
 *
 * @property $id
 * @property $id_consumible
 * @property $id_impresora
 * @property $created_at
 * @property $updated_at
 *
 * @property Consumible $consumible
 * @property Impresora $impresora
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ConsumiblesImpresora extends Model
{
    
    static $rules = [
		'id_consumible' => 'required',
		'id_impresora' => 'required',
    ];

    protected $perPage = 20;
    protected $table = 'consumibles_impresoras';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_consumible','id_impresora'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function consumible()
    {
        return $this->hasOne('App\Models\Consumible', 'id', 'id_consumible');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function impresora()
    {
        return $this->hasOne('App\Models\Impresora', 'id', 'id_impresora');
    }
    

}
