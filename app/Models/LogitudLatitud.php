<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LogitudLatitud
 *
 * @property $id
 * @property $Logitud
 * @property $Latitud
 * @property $Rutas
 *
 * @property Ruta $ruta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class LogitudLatitud extends Model
{
    
    static $rules = [
		'Logitud' => 'required',
		'Latitud' => 'required',
		'Rutas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Logitud','Latitud','Rutas'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ruta()
    {
        return $this->hasOne('App\Models\Ruta', 'id', 'Rutas');
    }
    

}
