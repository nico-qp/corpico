<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Condicione
 *
 * @property $id
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Computadora[] $computadoras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Condicione extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function computadoras()
    {
        return $this->hasMany('App\Models\Computadora', 'id_condicion', 'id');
    }
    

}
