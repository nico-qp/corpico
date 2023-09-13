<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CartTon
 *
 * @property $id
 * @property $id_usos
 * @property $tipo
 * @property $color
 * @property $codigo
 * @property $created_at
 * @property $updated_at
 *
 * @property Impresora[] $impresoras
 * @property Uso $uso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CartTon extends Model
{
    
    static $rules = [
		'id_usos' => 'required',
		'tipo' => 'required',
		'color' => 'required',
		'codigo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usos','tipo','color','codigo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function impresoras()
    {
        return $this->hasMany('App\Models\Impresora', 'id_cart_ton', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function uso()
    {
        return $this->hasOne('App\Models\Uso', 'id', 'id_usos');
    }
    

}

/*return $this->hasOne('App\Models\Uso', 'id', 'id_usos'); */
