<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuariosWindow
 *
 * @property $id
 * @property $usuario
 * @property $contraseña
 * @property $created_at
 * @property $updated_at
 *
 * @property Computadora[] $computadoras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UsuariosWindow extends Model
{
    
    static $rules = [
		'usuario' => 'required',
		'contraseña' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['usuario','contraseña'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function computadoras()
    {
        return $this->hasMany('App\Models\Computadora', 'id_usuario_window', 'id');
    }
    

}
