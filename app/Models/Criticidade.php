<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Criticidade
 *
 * @property $id
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Impresora[] $impresoras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Criticidade extends Model
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
    public function impresoras()
    {
        return $this->hasMany('App\Models\Impresora', 'id_criticidad', 'id');
    }
    

}
