<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vacante
 *
 * @property $id
 * @property $empresa_id
 * @property $puesto
 * @property $nivel
 * @property $num_candidatos
 * @property $num_vacantes
 * @property $edad
 * @property $genero
 * @property $idioma
 * @property $estado_civil
 * @property $exp
 * @property $conocimientos
 * @property $habilidades
 * @property $sueldo
 * @property $horario
 * @property $entrevistador
 * @property $contacto
 * @property $confidencial
 * @property $otros
 * @property $beneficios
 * @property $folio
 * @property $created_at
 * @property $updated_at
 *
 * @property Empresa $empresa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vacante extends Model
{
    
    static $rules = [
		'empresa_id' => 'required',
		'puesto' => 'required',
		'nivel' => 'required',
		'num_candidatos' => 'required',
		'num_vacantes' => 'required',
		'edad' => 'required',
		'genero' => 'required',
		'idioma' => 'required',
		'estado_civil' => 'required',
		'exp' => 'required',
		'conocimientos' => 'required',
		'habilidades' => 'required',
		'sueldo' => 'required',
		'horario' => 'required',
		'entrevistador' => 'required',
		'contacto' => 'required',
		'confidencial' => 'required',
		'otros' => 'required',
		'beneficios' => 'required',
		'folio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['empresa_id','puesto','nivel','num_candidatos','num_vacantes','edad','genero','idioma','estado_civil','exp','conocimientos','habilidades','sueldo','horario','entrevistador','contacto','confidencial','otros','beneficios','folio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'id', 'empresa_id');
    }
    

}
