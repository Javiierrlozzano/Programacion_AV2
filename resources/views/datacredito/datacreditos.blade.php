@extends('platilla')
<link rel="stylesheet" href="../../resources/css/user.css" media="screen">
    <link href="../../resources/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../resources/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->

    <!-- Bootstrap core JavaScript-->
    <script src="../../resources/vendor/jquery/jquery.min.js"></script>
    <script src="../../resources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../resources/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../resources/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../resources/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../resources/js/demo/chart-area-demo.js"></script>
    <script src="../../resources/js/demo/chart-pie-demo.js"></script>
    <section class="content container-fluid">
@section('Home')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usuario Data Creditos') }}
                            </span>

                             <div class="float-right">
                             
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
										<th>Tipocliente</th>
										<th>Nombre Completo</th>
									
								

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userArray as $cliente)
                                        <tr>
											<td>{{ $cliente['NDocumento'] }}</td>
											<td>{{ $cliente['NombreCliente'] }}</td>
											<td>{{ $cliente['Apellido'] }}</td>
											<td>{{ $cliente['Puntaje'] }}</td>
											<td>{{ $cliente['NievelRiesgo'] }}</td>
											<td>{{ $cliente['NumeroReportes'] }}</td>
										
							
                                            
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
           
            </div>
        </div>
    </div>
@endsection
