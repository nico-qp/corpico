<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sectore
 *
 * @property $id
 * @property $id_ubicacion
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Computadora[] $computadoras
 * @property Impresora[] $impresoras
 * @property Ubicacione $ubicacione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sectore extends Model
{
    
    static $rules = [
		'id_ubicacion' => 'required',
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_ubicacion','nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function computadoras()
    {
        return $this->hasMany('App\Models\Computadora', 'id_sectore', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function impresoras()
    {
        return $this->hasMany('App\Models\Impresora', 'id_sector', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ubicacione()
    {
        return $this->hasOne('App\Models\Ubicacione', 'id', 'id_ubicacion');
    }
    

}
