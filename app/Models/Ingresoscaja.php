<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingresoscaja
 *
 * @property $id
 * @property $Obsevacion
 * @property $TipoIngresos
 * @property $Billetera
 * @property $created_at
 * @property $updated_at
 *
 * @property Billetera $billetera
 * @property Ingreso $ingreso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ingresoscaja extends Model
{
    
    static $rules = [
		'Obsevacion' => 'required',
		'TipoIngresos' => 'required',
		'Billetera' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Obsevacion','TipoIngresos','Billetera'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function billetera()
    {
        return $this->hasOne('App\Models\Billetera', 'id', 'Billetera');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ingreso()
    {
        return $this->hasOne('App\Models\Ingreso', 'id', 'TipoIngresos');
    }
    

}
