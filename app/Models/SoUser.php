<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SoUser
 *
 * @property $id
 * @property $so_user
 * @property $contraseña
 * @property $created_at
 * @property $updated_at
 *
 * @property Pc[] $pcs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SoUser extends Model
{
    
    static $rules = [
		'so_user' => 'required',
		'contraseña' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['so_user','contraseña'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pcs()
    {
        return $this->hasMany('App\Models\Pc', 'id_so_user', 'id');
    }
    

}
