<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Egresado
 *
 * @property $id
 * @property $name
 * @property $lastname
 * @property $lastname2
 * @property $level
 * @property $career
 * @property $enrollment
 * @property $division
 * @property $gen
 * @property $address
 * @property $suburb
 * @property $state
 * @property $mun
 * @property $tel
 * @property $cel
 * @property $email
 * @property $user
 * @property $pass
 * @property $reg_date
 * @property $validity
 * @property $skills
 * @property $skills1
 * @property $skills2
 * @property $skills3
 * @property $skills4
 * @property $skills5
 * @property $skills6
 * @property $skills7
 * @property $skills8
 * @property $skills9
 * @property $area
 * @property $cv
 * @property $invoice
 * @property $remark
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Egresado extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidoPaterno' => 'required',
		'apellidoMaterno' => 'required',
		'nivelEstudios' => 'required',
		'carrera' => 'required',
		'matricula' => 'required',
		'division' => 'required',
		'gen' => 'required',
		'domicilio' => 'required',
		'colonia' => 'required',
		'estado' => 'required',
		'mun' => 'required',
		'tel' => 'required',
		'cel' => 'required',
		'email' => 'required',
		'usuario' => 'required',
		'contraseña' => 'required',
		'fecha_alta' => 'required',
		'vigencia' => 'required',
		'n1' => 'required',
		'n2' => 'required',
		'n3' => 'required',
		'n4' => 'required',
		'n5' => 'required',
		'n6' => 'required',
		'n7' => 'required',
		'n8' => 'required',
		'n9' => 'required',
		'n10' => 'required',
		'area' => 'required',
		'cv' => 'required',
		'folio' => 'required',
		'observaciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidoPaterno','apellidoMaterno','nivelEstudios','carrera','matricula','division','gen','domicilio','colonia','estado','mun','tel','cel','email','usuario','contraseña','fecha_alta','vigencia','n1','n2','n3','n4','n5','n6','n7','n8','n9','n10','area','cv','folio','observaciones'];



}
