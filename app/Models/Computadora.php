<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Computadora
 *
 * @property $id
 * @property $id_usuario_window
 * @property $id_user
 * @property $id_condicion
 * @property $id_sectore
 * @property $etiqueta
 * @property $nombre
 * @property $ip_172
 * @property $ip_10
 * @property $mac
 * @property $procesador
 * @property $ram
 * @property $so
 * @property $marca
 * @property $observaciones
 * @property $id_estado
 * @property $created_at
 * @property $updated_at
 *
 * @property ComputadorasImpresora[] $computadorasImpresoras
 * @property ComputadorasSoftware[] $computadorasSoftwares
 * @property Condicione $condicione
 * @property Sectore $sectore
 * @property User $user
 * @property UsuariosWindow $usuariosWindow
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Computadora extends Model
{
    
    static $rules = [
		'id_usuario_window' => 'required',
		'id_user' => 'required',
		'id_condicion' => 'required',
		'id_sectore' => 'required',
		'etiqueta' => 'required',
		'nombre' => 'required',
		'ip_172' => 'required',
		'ip_10' => 'required',
		'mac' => 'required',
		'procesador' => 'required',
		'ram' => 'required',
		'so' => 'required',
		'marca' => 'required',
		'observaciones' => 'required',
		'id_estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario_window','id_user','id_condicion','id_sectore','etiqueta','nombre','ip_172','ip_10','mac','procesador','ram','so','marca','observaciones','id_estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function computadorasImpresoras()
    {
        return $this->hasMany('App\Models\ComputadorasImpresora', 'id_computadora', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function computadorasSoftwares()
    {
        return $this->hasMany('App\Models\ComputadorasSoftware', 'id_computadora', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function condicione()
    {
        return $this->hasOne('App\Models\Condicione', 'id', 'id_condicion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sectore()
    {
        return $this->hasOne('App\Models\Sectore', 'id', 'id_sectore');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuariosWindow()
    {
        return $this->hasOne('App\Models\UsuariosWindow', 'id', 'id_usuario_window');
    }
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'id_estado');
    }

}
