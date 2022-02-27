<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $TipoDocumento
 * @property $NDocumento
 * @property $FechaExpedicion
 * @property $LugarExpedicion
 * @property $FechaNacimiento
 * @property $LugarNacimiento
 * @property $TipoCliente
 * @property $PrimerNombre
 * @property $SegundoNombre
 * @property $PrimerApellido
 * @property $SegundoApellido
 * @property $Sexo
 * @property $EstadoCivil
 * @property $NivelEducativo
 * @property $DeclaracionRenta
 * @property $DireccionCobro
 * @property $BarrioCobro
 * @property $DirrecionResidencia
 * @property $BarrioResidencia
 * @property $TelefonoResidencia
 * @property $TelefonoAdicional
 * @property $Celular
 * @property $CelularAdicionar
 * @property $Email
 * @property $PersonaAcargo
 * @property $TipoVivienda
 * @property $Estrato
 * @property $NombreArredandor
 * @property $NumeroArredando
 * @property $Zona
 * @property $Banco
 * @property $NumeroCuenta
 * @property $observaciones
 * @property $Ruta
 * @property $created_at
 * @property $updated_at
 *
 * @property Ruta $ruta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'TipoDocumento' => 'required',
		'NDocumento' => 'required',
		'FechaExpedicion' => 'required',
		'LugarExpedicion' => 'required',
		'FechaNacimiento' => 'required',
		'LugarNacimiento' => 'required',
		'TipoCliente' => 'required',
		'PrimerNombre' => 'required',
		'SegundoNombre' => 'required',
		'PrimerApellido' => 'required',
		'SegundoApellido' => 'required',
		'Sexo' => 'required',
		'EstadoCivil' => 'required',
		'NivelEducativo' => 'required',
		'DeclaracionRenta' => 'required',
		'DireccionCobro' => 'required',
		'BarrioCobro' => 'required',
		'DirrecionResidencia' => 'required',
		'BarrioResidencia' => 'required',
		'TelefonoResidencia' => 'required',
		'TelefonoAdicional' => 'required',
		'Celular' => 'required',
		'CelularAdicionar' => 'required',
		'Email' => 'required',
		'PersonaAcargo' => 'required',
		'TipoVivienda' => 'required',
		'Estrato' => 'required',
		'NombreArredandor' => 'required',
		'NumeroArredando' => 'required',
		'Zona' => 'required',
		'Banco' => 'required',
		'NumeroCuenta' => 'required',
		'observaciones' => 'required',
		'Ruta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['TipoDocumento','NDocumento','FechaExpedicion','LugarExpedicion','FechaNacimiento','LugarNacimiento','TipoCliente','PrimerNombre','SegundoNombre','PrimerApellido','SegundoApellido','Sexo','EstadoCivil','NivelEducativo','DeclaracionRenta','DireccionCobro','BarrioCobro','DirrecionResidencia','BarrioResidencia','TelefonoResidencia','TelefonoAdicional','Celular','CelularAdicionar','Email','PersonaAcargo','TipoVivienda','Estrato','NombreArredandor','NumeroArredando','Zona','Banco','NumeroCuenta','observaciones','Ruta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ruta()
    {
        return $this->hasOne('App\Models\Ruta', 'id', 'Ruta');
    }
    

}
