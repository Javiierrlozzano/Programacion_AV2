@extends('platilla')
@section('Home')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pago') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pagos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Cliente</th>
										<th>Credito</th>
										<th>Billeterapago</th>
										<th>Fechapago</th>
										<th>Valor</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pagos as $pago)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pago->Cliente }}</td>
											<td>{{ $pago->Credito }}</td>
											<td>{{ $pago->BilleteraPago }}</td>
											<td>{{ $pago->FechaPago }}</td>
											<td>{{ $pago->Valor }}</td>

                                            <td>
                                                <form action="{{ route('pagos.destroy',$pago->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pagos.show',$pago->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pagos.edit',$pago->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $pagos->links() !!}
            </div>
        </div>
    </div>
@endsection
