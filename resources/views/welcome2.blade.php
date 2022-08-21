@extends('layout.app')

@section('breadcrumb')
    <x-breadCrumbComponent page="Welcome 2" />
@endsection

@section('content')
    <x-cardComponent>
        <x-slot name="body">
            <h4 class="card-title">Card body</h4>
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
            {{ $body }}
        </div>
    </div>
@endsection --}}

