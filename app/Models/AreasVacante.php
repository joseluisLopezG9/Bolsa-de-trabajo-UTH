<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AreasVacante
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Vacante[] $vacantes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AreasVacante extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vacantes()
    {
        return $this->hasMany('App\Models\Vacante', 'area_id', 'id');
    }
    

}
