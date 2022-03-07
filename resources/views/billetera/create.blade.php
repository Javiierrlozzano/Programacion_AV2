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
 
<link href="b-admin-2.min.css" rel="stylesheet">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Billetera</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('billeteras.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('billetera.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection