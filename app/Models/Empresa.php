<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $nombre
 * @property $domicilio
 * @property $tel
 * @property $giro
 * @property $estado
 * @property $ciudad
 * @property $actividad
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Vacante[] $vacantes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'domicilio' => 'required',
		'tel' => 'required',
		'giro' => 'required',
		'estado' => 'required',
		'ciudad' => 'required',
		'actividad' => 'required',
		'observaciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','domicilio','tel','giro','estado','ciudad','actividad','observaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vacantes()
    {
        return $this->hasMany('App\Models\Vacante', 'empresa_id', 'id');
    }
    

}
