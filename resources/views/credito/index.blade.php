@extends('layouts.app')

@section('template_title')
    Creditos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Credito') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('creditos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Tipocredito</th>
										<th>Fechainicio</th>
										<th>Fechacancelacion</th>
										<th>Numerocuotas</th>
										<th>Numerocuotascancelada</th>
										<th>Ultimacuota</th>
										<th>Valortotalcredito</th>
										<th>Estadocredito</th>
										<th>Porcentaje</th>
										<th>Billeterasalida</th>
										<th>Billeteraentrada</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($creditos as $credito)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $credito->TipoCredito }}</td>
											<td>{{ $credito->FechaInicio }}</td>
											<td>{{ $credito->FechaCancelacion }}</td>
											<td>{{ $credito->NumeroCuotas }}</td>
											<td>{{ $credito->NumeroCuotasCancelada }}</td>
											<td>{{ $credito->UltimaCuota }}</td>
											<td>{{ $credito->ValorTotalCredito }}</td>
											<td>{{ $credito->EstadoCredito }}</td>
											<td>{{ $credito->Porcentaje }}</td>
											<td>{{ $credito->BilleteraSalida }}</td>
											<td>{{ $credito->BilleteraEntrada }}</td>

                                            <td>
                                                <form action="{{ route('creditos.destroy',$credito->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('creditos.show',$credito->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('creditos.edit',$credito->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $creditos->links() !!}
            </div>
        </div>
    </div>
@endsection
