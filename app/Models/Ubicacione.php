<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ubicacione
 *
 * @property $id
 * @property $edificio
 * @property $piso
 * @property $created_at
 * @property $updated_at
 *
 * @property Sectore[] $sectores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ubicacione extends Model
{
    
    static $rules = [
		'edificio' => 'required',
		'piso',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['edificio','piso'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sectores()
    {
        return $this->hasMany('App\Models\Sectore', 'id_ubicacion', 'id');
    }
    

}
