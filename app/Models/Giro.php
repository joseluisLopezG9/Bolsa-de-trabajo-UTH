<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Giro
 *
 * @property $id
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Empresa[] $empresas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Giro extends Model
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
    public function empresas()
    {
        return $this->hasMany('App\Models\Empresa', 'giro_id', 'id');
    }
    

}
