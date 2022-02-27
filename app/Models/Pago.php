<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $Cliente
 * @property $Credito
 * @property $BilleteraPago
 * @property $FechaPago
 * @property $Valor
 * @property $created_at
 * @property $updated_at
 *
 * @property Billetera $billetera
 * @property Cliente $cliente
 * @property Credito $credito
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    static $rules = [
		'Cliente' => 'required',
		'Credito' => 'required',
		'BilleteraPago' => 'required',
		'FechaPago' => 'required',
		'Valor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Cliente','Credito','BilleteraPago','FechaPago','Valor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function billetera()
    {
        return $this->hasOne('App\Models\Billetera', 'id', 'BilleteraPago');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'Cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function credito()
    {
        return $this->hasOne('App\Models\Credito', 'id', 'Credito');
    }
    

}
