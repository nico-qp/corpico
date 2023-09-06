<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pc
 *
 * @property $id
 * @property $id_sector
 * @property $trabajador
 * @property $nombre_pc
 * @property $usuario_geasys
 * @property $ip_172
 * @property $ip_10
 * @property $mac
 * @property $cpu
 * @property $ram
 * @property $so
 * @property $created_at
 * @property $updated_at
 *
 * @property Sectore $sectore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pc extends Model
{
    
    static $rules = [
		'id_sector' => 'required',
		'trabajador' => 'required',
		'nombre_pc' => 'required',
		'usuario_geasys' => 'required',
		'ip_172' => 'required',
		'ip_10' => 'required',
		'mac' => 'required',
		'cpu' => 'required',
		'ram' => 'required',
		'so' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_sector','trabajador','nombre_pc','usuario_geasys','ip_172','ip_10','mac','cpu','ram','so'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sectore()
    {
        return $this->hasOne('App\Models\Sectore', 'id', 'id_sector');
    }
    

}
