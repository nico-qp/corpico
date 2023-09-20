<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoConsumible
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Consumible[] $consumibles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoConsumible extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consumibles()
    {
        return $this->hasMany('App\Models\Consumible', 'id_tipo', 'id');
    }
    

}
