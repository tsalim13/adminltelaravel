@extends('layout.app')

@section('breadcrumb')
    <x-breadCrumbComponent page="Welcome" />
@endsection

@section('content')
    <x-cardComponent>
        <x-slot name="title">
            <h3 class="card-title">Card title</h3>
        </x-slot>

        <x-slot name="body">
            <h4 class="card-title">Card body</h4>
        </x-slot>

        <x-slot name="footer">
            <h3 class="card-title">Card footer</h3>
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
        @if (isset($title))
            <div class="card-header">
                {{ $title }}
            </div>
        @endif

        <div class="card-body">
            {{ $body }}
        </div>

        @if (isset($footer))
            <div class="card-footer">
                {{ $footer }}
            </div>
        @endif
    </div>
@endsection --}}
