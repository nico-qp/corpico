<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComputadorasSoftware
 *
 * @property $id
 * @property $id_software
 * @property $id_computadora
 * @property $created_at
 * @property $updated_at
 *
 * @property Computadora $computadora
 * @property Software $software
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ComputadorasSoftware extends Model
{
    
    static $rules = [
		'id_software' => 'required',
		'id_computadora' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_software','id_computadora'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function computadora()
    {
        return $this->hasOne('App\Models\Computadora', 'id', 'id_computadora');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function software()
    {
        return $this->hasOne('App\Models\Software', 'id', 'id_software');
    }
    

}
