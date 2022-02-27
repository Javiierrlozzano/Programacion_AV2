@extends('layouts.app')

@section('template_title')
    Cliente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cliente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Tipodocumento</th>
										<th>Ndocumento</th>
										<th>Fechaexpedicion</th>
										<th>Lugarexpedicion</th>
										<th>Fechanacimiento</th>
										<th>Lugarnacimiento</th>
										<th>Tipocliente</th>
										<th>Primernombre</th>
										<th>Segundonombre</th>
										<th>Primerapellido</th>
										<th>Segundoapellido</th>
										<th>Sexo</th>
										<th>Estadocivil</th>
										<th>Niveleducativo</th>
										<th>Declaracionrenta</th>
										<th>Direccioncobro</th>
										<th>Barriocobro</th>
										<th>Dirrecionresidencia</th>
										<th>Barrioresidencia</th>
										<th>Telefonoresidencia</th>
										<th>Telefonoadicional</th>
										<th>Celular</th>
										<th>Celularadicionar</th>
										<th>Email</th>
										<th>Personaacargo</th>
										<th>Tipovivienda</th>
										<th>Estrato</th>
										<th>Nombrearredandor</th>
										<th>Numeroarredando</th>
										<th>Zona</th>
										<th>Banco</th>
										<th>Numerocuenta</th>
										<th>Observaciones</th>
										<th>Ruta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cliente->TipoDocumento }}</td>
											<td>{{ $cliente->NDocumento }}</td>
											<td>{{ $cliente->FechaExpedicion }}</td>
											<td>{{ $cliente->LugarExpedicion }}</td>
											<td>{{ $cliente->FechaNacimiento }}</td>
											<td>{{ $cliente->LugarNacimiento }}</td>
											<td>{{ $cliente->TipoCliente }}</td>
											<td>{{ $cliente->PrimerNombre }}</td>
											<td>{{ $cliente->SegundoNombre }}</td>
											<td>{{ $cliente->PrimerApellido }}</td>
											<td>{{ $cliente->SegundoApellido }}</td>
											<td>{{ $cliente->Sexo }}</td>
											<td>{{ $cliente->EstadoCivil }}</td>
											<td>{{ $cliente->NivelEducativo }}</td>
											<td>{{ $cliente->DeclaracionRenta }}</td>
											<td>{{ $cliente->DireccionCobro }}</td>
											<td>{{ $cliente->BarrioCobro }}</td>
											<td>{{ $cliente->DirrecionResidencia }}</td>
											<td>{{ $cliente->BarrioResidencia }}</td>
											<td>{{ $cliente->TelefonoResidencia }}</td>
											<td>{{ $cliente->TelefonoAdicional }}</td>
											<td>{{ $cliente->Celular }}</td>
											<td>{{ $cliente->CelularAdicionar }}</td>
											<td>{{ $cliente->Email }}</td>
											<td>{{ $cliente->PersonaAcargo }}</td>
											<td>{{ $cliente->TipoVivienda }}</td>
											<td>{{ $cliente->Estrato }}</td>
											<td>{{ $cliente->NombreArredandor }}</td>
											<td>{{ $cliente->NumeroArredando }}</td>
											<td>{{ $cliente->Zona }}</td>
											<td>{{ $cliente->Banco }}</td>
											<td>{{ $cliente->NumeroCuenta }}</td>
											<td>{{ $cliente->observaciones }}</td>
											<td>{{ $cliente->Ruta }}</td>

                                            <td>
                                                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('clientes.show',$cliente->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection
