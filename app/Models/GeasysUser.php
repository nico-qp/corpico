<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GeasysUser
 *
 * @property $id
 * @property $geasys_user
 * @property $nombre_completo
 * @property $created_at
 * @property $updated_at
 *
 * @property Pc[] $pcs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GeasysUser extends Model
{
    
    static $rules = [
		'geasys_user' => 'required',
		'nombre_completo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['geasys_user','nombre_completo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pcs()
    {
        return $this->hasMany('App\Models\Pc', 'id_geasys_user', 'id');
    }
    

}
