@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
<div class="content">
  <div class="card">
    <div class="card-header">
      <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
        <li class="nav-item">
          <a class="nav-link active" href="{!! route('clients.index') !!}"><i class="fa fa-list mr-2"></i>Clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{!! route('clients.create') !!}"><i class="fa fa-plus mr-2"></i>Create</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <div class="row">
        @include('clients.show_fields')

        <!-- Back Field -->
        <div class="form-group col-12 text-right">
          <a href="{!! route('clients.index') !!}" class="btn btn-default"><i class="fa fa-undo"></i> Back</a>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
@endsection
