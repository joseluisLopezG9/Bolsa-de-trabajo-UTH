<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Egresado
 *
 * @property $id
 * @property $nombre
 * @property $apellidoPaterno
 * @property $apellidoMaterno
 * @property $nivel_id
 * @property $carrera_id
 * @property $matricula
 * @property $division
 * @property $generacion_id
 * @property $domicilio
 * @property $colonia
 * @property $estado_id
 * @property $municipio
 * @property $telefono
 * @property $celular
 * @property $email
 * @property $usuario
 * @property $contraseña
 * @property $fecha_alta
 * @property $vigencia
 * @property $n1
 * @property $n2
 * @property $n3
 * @property $n4
 * @property $n5
 * @property $n6
 * @property $n7
 * @property $n8
 * @property $n9
 * @property $n10
 * @property $area_id
 * @property $cv
 * @property $folio
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Area $area
 * @property Carrera $carrera
 * @property Estado $estado
 * @property Generacione $generacione
 * @property Nivele $nivele
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Egresado extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidoPaterno' => 'required',
		'apellidoMaterno' => 'required',
		'nivel_id' => 'required',
		'carrera_id' => 'required',
		'matricula' => 'required',
		'division' => 'required',
		'generacion_id' => 'required',
		'domicilio' => 'required',
		'colonia' => 'required',
		'estado_id' => 'required',
		'municipio' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'usuario' => 'required',
		'contraseña' => 'required',
		'fecha_alta' => 'required',
		'vigencia' => 'required',
		'area_id' => 'required',
		'folio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidoPaterno','apellidoMaterno','nivel_id','carrera_id','matricula','division','generacion_id','domicilio','colonia','estado_id','municipio','telefono','celular','email','usuario','contraseña','fecha_alta','vigencia','n1','n2','n3','n4','n5','n6','n7','n8','n9','n10','area_id','cv','folio','observaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function area()
    {
        return $this->hasOne('App\Models\Area', 'id', 'area_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carrera()
    {
        return $this->hasOne('App\Models\Carrera', 'id', 'carrera_id');
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
    public function generacione()
    {
        return $this->hasOne('App\Models\Generacione', 'id', 'generacion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function nivele()
    {
        return $this->hasOne('App\Models\Nivele', 'id', 'nivel_id');
    }
    

}
