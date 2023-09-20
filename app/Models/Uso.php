<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Uso
 *
 * @property $id
 * @property $mensual
 * @property $semestral
 * @property $anual
 * @property $created_at
 * @property $updated_at
 *
 * @property Consumible[] $consumibles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Uso extends Model
{
    
    static $rules = [
		'mensual' => 'required',
		'semestral' => 'required',
		'anual' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['mensual','semestral','anual'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consumibles()
    {
        return $this->hasMany('App\Models\Consumible', 'id_uso', 'id');
    }
    

}
