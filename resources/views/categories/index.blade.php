@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->
    <div class="content">
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                    @can('currency-list')
                        <li class="nav-item">
                            <a class="nav-link active" href="{!! url()->current() !!}"><i class="fa fa-list mr-2"></i>Categories</a>
                        </li>
                    @endcan
                    <li class="nav-item">
                        <a class="nav-link" href="{!! route('categories.create') !!}"><i class="fa fa-plus mr-2"></i>Create</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                {!! $dataTable->table(['width' => '100%']) !!}
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    @include('layouts.media_modal')
@endsection
@section('js')
    {{$dataTable->scripts()}}
@stop
