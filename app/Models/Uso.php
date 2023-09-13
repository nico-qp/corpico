<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Uso
 *
 * @property $id
 * @property $uso_mensual
 * @property $uso_semestral
 * @property $uso_anual
 * @property $created_at
 * @property $updated_at
 *
 * @property CartTon[] $cartTons
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Uso extends Model
{
    
    static $rules = [
		'uso_mensual' => 'required',
		'uso_semestral' => 'required',
		'uso_anual' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['uso_mensual','uso_semestral','uso_anual'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartTons()
    {
        return $this->hasMany('App\Models\CartTon', 'id_usos', 'id');
    }
    

}
