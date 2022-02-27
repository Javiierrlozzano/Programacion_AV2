<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Billetera
 *
 * @property $id
 * @property $NombreBilletera
 * @property $ValorTotal
 * @property $created_at
 * @property $updated_at
 *
 * @property Credito[] $creditos
 * @property Credito[] $creditos
 * @property Ingresoscaja[] $ingresoscajas
 * @property Pago[] $pagos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Billetera extends Model
{
    
    static $rules = [
		'NombreBilletera' => 'required',
		'ValorTotal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NombreBilletera','ValorTotal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function creditos()
    {
        return $this->hasMany('App\Models\Credito', 'BilleteraSalida', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
   
    public function ingresoscajas()
    {
        return $this->hasMany('App\Models\Ingresoscaja', 'Billetera', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos()
    {
        return $this->hasMany('App\Models\Pago', 'BilleteraPago', 'id');
    }
    

}
