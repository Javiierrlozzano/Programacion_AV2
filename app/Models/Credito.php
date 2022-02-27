<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Credito
 *
 * @property $id
 * @property $TipoCredito
 * @property $FechaInicio
 * @property $FechaCancelacion
 * @property $NumeroCuotas
 * @property $NumeroCuotasCancelada
 * @property $UltimaCuota
 * @property $ValorTotalCredito
 * @property $EstadoCredito
 * @property $Porcentaje
 * @property $BilleteraSalida
 * @property $BilleteraEntrada
 * @property $created_at
 * @property $updated_at
 *
 * @property Billetera $billetera
 * @property Billetera $billetera
 * @property Pago[] $pagos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Credito extends Model
{
    
    static $rules = [
		'TipoCredito' => 'required',
		'FechaInicio' => 'required',
		'FechaCancelacion' => 'required',
		'NumeroCuotas' => 'required',
		'NumeroCuotasCancelada' => 'required',
		'UltimaCuota' => 'required',
		'ValorTotalCredito' => 'required',
		'EstadoCredito' => 'required',
		'Porcentaje' => 'required',
		'BilleteraSalida' => 'required',
		'BilleteraEntrada' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['TipoCredito','FechaInicio','FechaCancelacion','NumeroCuotas','NumeroCuotasCancelada','UltimaCuota','ValorTotalCredito','EstadoCredito','Porcentaje','BilleteraSalida','BilleteraEntrada'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
 
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function billeteras()
    {
        return $this->hasOne('App\Models\Billetera', 'id', 'BilleteraEntrada');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos()
    {
        return $this->hasMany('App\Models\Pago', 'Credito', 'id');
    }
    

}
