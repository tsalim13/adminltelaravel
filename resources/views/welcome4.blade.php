@extends('layout.app')

@section('breadcrumb')
    <x-breadCrumbComponent page="Welcome 4" />
@endsection

@section('content')
    <x-cardComponent>
        <x-slot name="body">
            <div class="row">
                <button type="button" class="btn btn-default col-sm-3" data-toggle="modal" data-target="#modal">
                    Launch Default Modal
                </button>
                <div class="col-sm-2"></div>
                <button type="button" class="btn btn-default col-sm-3" data-toggle="modal" data-target="#modal-xl">
                    Launch Extra Large Modal
                </button>
            </div>
        </x-slot>
    </x-cardComponent>

    <x-modalComponent modal="modal">
        <x-slot name="body">
            <h3>Body</h3>
        </x-slot>
    </x-modalComponent>

    <x-modalComponent modal="modal-xl" class="modal-xl"/>

@endsection
























{{-- ************************************************************************************************************************************************************ --}}


{{-- @extends('layout.app')

@section('breadcrumb')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Welcome 4</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Welcome 4</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="row">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal">
                    Launch Default Modal
                </button>
                <div class="col-sm-2"></div>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                    Launch Extra Large Modal
                </button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal">
        <div class='modal-dialog'>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3>Body</h3>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <div class="modal fade" id="modal-xl">
        <div class='modal-dialog modal-xl'>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


@endsection --}}





























@push('scripts')
<script>
    @if ($errors->any())
        $(document).ready(function(){
        $("#{{$modal_id ?? 'kt_modal_add_user'}}").modal('show')
        });

    @endif
</script>
@endpush
