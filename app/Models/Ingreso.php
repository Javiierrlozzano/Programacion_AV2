<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingreso
 *
 * @property $id
 * @property $NombreIngresos
 * @property $CodigoIngresos
 * @property $created_at
 * @property $updated_at
 *
 * @property Ingresoscaja[] $ingresoscajas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ingreso extends Model
{
    
    static $rules = [
		'NombreIngresos' => 'required',
		'CodigoIngresos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NombreIngresos','CodigoIngresos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingresoscajas()
    {
        return $this->hasMany('App\Models\Ingresoscaja', 'TipoIngresos', 'id');
    }
    

}
