@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
    <!-- Content Header (Page header) -->
    @include('flash-message')
    <!-- /.content-header -->
    <div class="content">
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="card">
            <div class="card-header">
                {!! Form::open(['route' => ['totaloverview']]) !!}
                <div class="form-group row ">
                    {!! Form::label('name', 'Start Date', ['class' => 'col-6 control-label text-left']) !!}
                    <div class="col-6">
                        {!! Form::text('startdate',null  ,  ['autocomplete'=>'off','class' => 'form-control datetimepicker-input', 'id'=>'datetimepicker4', 'data-toggle'=>'datetimepicker','data-target'=>'#datetimepicker4']) !!}
                        <div class="form-text text-muted">

                        </div>
                    </div>
                </div>
                <div class="form-group row ">
                    {!! Form::label('name', 'End Date', ['class' => 'col-6 control-label text-left']) !!}
                    <div class="col-6">
                        {!! Form::text('enddate', null,  ['autocomplete'=>'off' ,'class' => 'form-control datetimepicker-input', 'id'=>'datetimepicker5', 'data-toggle'=>'datetimepicker','data-target'=>'#datetimepicker5']) !!}
                        <div class="form-text text-muted">

                        </div>
                    </div>
                </div>

                <!-- Submit Field -->
                <div class="form-group col-12 text-right">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Show data</button>
                </div>

            </div>
            {!! Form::close() !!}
            <div class="clearfix"></div>
            @if(isset($chartpayment ))
                <div class="card-body">
                    <div class="table-responsive">
                        <h5>Data from: {{$request->startdate}} - {{$request->enddate}}</h5>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Services</th>
                                <th>Products</th>
                                <th>Costs</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            $service = 0;
                            $product = 0;
                            $cost = 0;
                            ?>
                            @foreach ($chartpayment as $r)
                             <?php
                            $service += $r->servicetotal;
                            $product += $r->producttotal;
                            $cost += $r->cost;
                            ?>
                                <tr>
                                    <td>{{ $r->created_at }}</td>
                                    <td>{{ $r->servicetotal }} SRD</td>
                                    <td>{{ $r->producttotal }} SRD</td>
                                    <td>{{ $r->cost }} SRD</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td><b>Totaal</b></td>
                                <td><b>{{ $service }} SRD</b></td>
                                <td><b>{{ $product }} SRD</b></td>
                                <td><b>{{ $cost }} SRD</b></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
            @endif
        </div>

        </div>
    </div>
    @include('layouts.media_modal')
@endsection
@section('js')
    <script type="text/javascript">

            $(function () {
                $('#datetimepicker5').datetimepicker({
                    format: 'YYYY-MM-DD'
                });

                $('#datetimepicker4').datetimepicker({
                    format: 'YYYY-MM-DD'
                });
            });

    </script>
@stop
