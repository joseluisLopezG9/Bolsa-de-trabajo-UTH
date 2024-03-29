<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Generacione
 *
 * @property $id
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Egresado[] $egresados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Generacione extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function egresados()
    {
        return $this->hasMany('App\Models\Egresado', 'generacion_id', 'id');
    }
    

}
