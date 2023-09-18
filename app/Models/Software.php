<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Software
 *
 * @property $id
 * @property $nombre
 * @property $version
 * @property $expira
 * @property $created_at
 * @property $updated_at
 *
 * @property ComputadorasSoftware[] $computadorasSoftwares
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Software extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'version' => 'required',
		'expira' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','version','expira'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function computadorasSoftwares()
    {
        return $this->hasMany('App\Models\ComputadorasSoftware', 'id_software', 'id');
    }
    

}
