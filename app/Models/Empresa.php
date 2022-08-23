<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $nombre
 * @property $domicilio
 * @property $telefono
 * @property $giro_id
 * @property $estado_id
 * @property $ciudad
 * @property $actividad_id
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Actividade $actividade
 * @property Estado $estado
 * @property Giro $giro
 * @property Vacante[] $vacantes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'domicilio' => 'required',
		'telefono' => 'required',
		'giro_id' => 'required',
		'estado_id' => 'required',
		'ciudad' => 'required',
		'actividad_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','domicilio','telefono','giro_id','estado_id','ciudad','actividad_id','observaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function actividade()
    {
        return $this->hasOne('App\Models\Actividade', 'id', 'actividad_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'estado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function giro()
    {
        return $this->hasOne('App\Models\Giro', 'id', 'giro_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vacantes()
    {
        return $this->hasMany('App\Models\Vacante', 'empresa_id', 'id');
    }
    

}
