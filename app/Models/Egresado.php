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
		'name' => 'required',
		'lastname' => 'required',
		'lastname2' => 'required',
		'level' => 'required',
		'career' => 'required',
		'enrollment' => 'required',
		'division' => 'required',
		'gen' => 'required',
		'address' => 'required',
		'suburb' => 'required',
		'state' => 'required',
		'mun' => 'required',
		'tel' => 'required',
		'cel' => 'required',
		'email' => 'required',
		'user' => 'required',
		'pass' => 'required',
		'reg_date' => 'required',
		'validity' => 'required',
		'skills' => 'required',
		'skills1' => 'required',
		'skills2' => 'required',
		'skills3' => 'required',
		'skills4' => 'required',
		'skills5' => 'required',
		'skills6' => 'required',
		'skills7' => 'required',
		'skills8' => 'required',
		'skills9' => 'required',
		'area' => 'required',
		'cv' => 'required',
		'invoice' => 'required',
		'remark' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','lastname','lastname2','level','career','enrollment','division','gen','address','suburb','state','mun','tel','cel','email','user','pass','reg_date','validity','skills','skills1','skills2','skills3','skills4','skills5','skills6','skills7','skills8','skills9','area','cv','invoice','remark'];



}
