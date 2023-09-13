<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pc
 *
 * @property $id
 * @property $id_so_user
 * @property $id_geasys_user
 * @property $id_condicion
 * @property $etiqueta
 * @property $nombre_pc
 * @property $ip_172
 * @property $ip_10
 * @property $mac
 * @property $cpu
 * @property $ram
 * @property $so
 * @property $marca
 * @property $observaciones
 * @property $uso_stock
 * @property $created_at
 * @property $updated_at
 *
 * @property Condition $condition
 * @property GeasysUser $geasysUser
 * @property ImpSector[] $impSectors
 * @property PcSector[] $pcSectors
 * @property SoUser $soUser
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pc extends Model
{
    
    static $rules = [
		'id_so_user' => 'required',
		'id_geasys_user' => 'required',
		'id_condicion' => 'required',
		'etiqueta' => 'required',
		'nombre_pc' => 'required',
		'ip_172' => 'required',
		'ip_10' => 'required',
		'mac' => 'required',
		'cpu' => 'required',
		'ram' => 'required',
		'so' => 'required',
		'marca' => 'required',
		'observaciones' => 'required',
		'uso_stock' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_so_user','id_geasys_user','id_condicion','etiqueta','nombre_pc','ip_172','ip_10','mac','cpu','ram','so','marca','observaciones','uso_stock'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function condition()
    {
        return $this->hasOne('App\Models\Condition', 'id', 'id_condicion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function geasysUser()
    {
        return $this->hasOne('App\Models\GeasysUser', 'id', 'id_geasys_user');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function impSectors()
    {
        return $this->hasMany('App\Models\ImpSector', 'id_pc', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pcSectors()
    {
        return $this->hasMany('App\Models\PcSector', 'id_pc', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function soUser()
    {
        return $this->hasOne('App\Models\SoUser', 'id', 'id_so_user');
    }
    

}
