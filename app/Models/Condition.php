<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Condition
 *
 * @property $id
 * @property $condicion
 *
 * @property Pc[] $pcs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Condition extends Model
{
    
    static $rules = [
		'condicion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['condicion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pcs()
    {
        return $this->hasMany('App\Models\Pc', 'id_condicion', 'id');
    }
    

}
