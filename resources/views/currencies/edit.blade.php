@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
<div class="content">
  <div class="clearfix"></div>
  <div class="card">
    <div class="card-header">
      <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
        @can('currency-list')
        <li class="nav-item">
          <a class="nav-link" href="{!! route('currencies.index') !!}"><i class="fa fa-list mr-2"></i>Currency</a>
        </li>
        @endcan
        @can('currency-create')
        <li class="nav-item">
          <a class="nav-link" href="{!! route('currencies.create') !!}"><i class="fa fa-plus mr-2"></i>Create</a>
        </li>
        @endcan
        <li class="nav-item">
          <a class="nav-link active" href="{!! url()->current() !!}"><i class="fa fa-pencil mr-2"></i>Edit</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      {!! Form::model($currency, ['route' => ['currencies.update', $currency->id], 'method' => 'patch']) !!}
      <div class="row">
        @include('currencies.fields')
      </div>
      {!! Form::close() !!}
      <div class="clearfix"></div>
    </div>
  </div>
</div>
@include('layouts.media_modal')
@endsection
