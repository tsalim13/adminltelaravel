@extends('layout.app')

@section('breadcrumb')
    <x-breadCrumbComponent page="Welcome 3" />
@endsection

@section('content')
    <x-cardComponent>
        <x-slot name="body">
            <div class="row">
                <x-formGroupColComponent label="Nom" col="6" />
                <x-formGroupColComponent label="Prénom" col="6" />
            </div>
            <div class="row">
                <x-formGroupColComponent label="Pays" col="4" />
                <x-formGroupColComponent label="Vile" col="4" />
                <x-formGroupColComponent label="Commune" col="4" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="row justify-content-end">
                <button type="button" class="btn btn-block btn-primary col-sm-3">Primary</button>
            </div>
        </x-slot>
    </x-cardComponent>

    <x-cardComponent>
        <x-slot name="title">
            <h4>DataTable example with component</h4>
        </x-slot>
        <x-slot name="body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 30; $i++)
                        <tr>
                            <td>Trident {{ $i }}</td>
                            <td>Internet
                                Explorer 4.0
                            </td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                        </tr>
                    @endfor
                </tbody>
                <tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                </tfoot>
            </table>
        </x-slot>
    </x-cardComponent>
@endsection






















{{-- ************************************************************************************************************************************************************ --}}

{{-- 
@extends('layout.app')

@section('breadcrumb')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">{{ $page }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">{{ $page }}</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" placeholder="Nom...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" class="form-control" placeholder="Prénom ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pays</label>
                        <input type="text" class="form-control" placeholder="Pays ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Vile</label>
                        <input type="text" class="form-control" placeholder="Vile ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Commune</label>
                        <input type="text" class="form-control" placeholder="Commune ...">
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <div class="row justify-content-end">
                <button type="button" class="btn btn-block btn-primary col-sm-3">Primary</button>
            </div>
        </div>
    </div>

    <div class="card">
            <div class="card-header">
                <h4>DataTable example with component</h4>
            </div>
    
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 30; $i++)
                        <tr>
                            <td>Trident {{ $i }}</td>
                            <td>Internet
                                Explorer 4.0
                            </td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                        </tr>
                    @endfor
                </tbody>
                <tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    
    </div>

@endsection
 --}}






















































































































 @push('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@push('scripts')
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush