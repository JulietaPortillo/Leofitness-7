@extends('app')

@section('content')

    <div class="rightside bg-grey-100">
        <!-- BEGIN PAGE HEADING -->
        <div class="page-head bg-grey-100 padding-top-15 no-padding-bottom">
            @include('flash::message')
            <h1 class="page-title">Configuraciones</h1>
        </div>

        <div class="container-fluid">
        {!! Form::Open(['url' => 'settings/save','id'=>'settingsform','files'=>'true']) !!}
        <!-- General Settings -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel no-border">
                        <div class="panel-title">
                            <div class="panel-head font-size-15"><i class="fa fa-cogs"></i> General</div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <!--Main row start-->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('gym_name','Nombre de gimnasio') !!}
                                        {!! Form::text('gym_name',$settings['gym_name'],['class'=>'form-control', 'id' => 'gym_name']) !!}
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('financial_start','Inicio de año fiscal') !!}
                                        {!! Form::text('financial_start',$settings['financial_start'],['class'=>'form-control datepicker-default', 'id' => 'financial_start']) !!}
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        {!! Form::label('financial_end','Fin de año fiscal') !!}
                                        {!! Form::text('financial_end',$settings['financial_end'],['class'=>'form-control datepicker-default', 'id' => 'financial_end']) !!}
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                

                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                {!! Form::label('gym_address_1','Direccion de gimnasio "Calle - Avenida" ') !!}
                                                {!! Form::text('gym_address_1',$settings['gym_address_1'],['class'=>'form-control', 'id' => 'gym_address_1']) !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                {!! Form::label('gym_address_2','Direccion Departamento y Municipio') !!}
                                                {!! Form::text('gym_address_2',$settings['gym_address_2'],['class'=>'form-control', 'id' => 'gym_address_2']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Invoice Settings -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel no-border">
                        <div class="panel-title">
                            <div class="panel-head font-size-15"><i class="fa fa-file"></i> Recibo</div>
                        </div>
                        <div class="panel-body">
                            <div class="row">                <!--Main row start-->
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                {!! Form::label('invoice_prefix','Prefijo de recibo') !!}
                                                {!! Form::text('invoice_prefix',$settings['invoice_prefix'],['class'=>'form-control', 'id' => 'invoice_prefix']) !!}
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                {!! Form::label('invoice_last_number','Ultimo de numero del recibo') !!}
                                                {!! Form::text('invoice_last_number',$settings['invoice_last_number'],['class'=>'form-control', 'id' => 'invoice_last_number']) !!}
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                {!! Form::label('invoice_name_type','Nombre en el recibo') !!}
                                                {!! Form::select('invoice_name_type',array('gym_name' => 'Nombre del gimnasio'),$settings['invoice_name_type'],['class'=>'form-control selectpicker show-tick show-menu-arrow', 'id' => 'invoice_name_type']) !!}
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                {!! Form::label('invoice_number_mode','Numeracion de recibo') !!}
                                                {!! Form::select('invoice_number_mode',array('0' => 'Manual', '1' => 'Automatico'),$settings['invoice_number_mode'],['class'=>'form-control selectpicker show-tick show-menu-arrow', 'id' => 'invoice_number_mode']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- member Settings -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel no-border">
                        <div class="panel-title">
                            <div class="panel-head font-size-15"><i class="fa fa-users"></i> Miembros</div>
                        </div>

                        <div class="panel-body">
                            <div class="row"><!--Main row start-->
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {!! Form::label('member_prefix','Prefijo de miembro') !!}
                                                {!! Form::text('member_prefix',$settings['member_prefix'],['class'=>'form-control', 'id' => 'member_prefix']) !!}
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {!! Form::label('member_last_number','Ultimo numero del miembro') !!}
                                                {!! Form::text('member_last_number',$settings['member_last_number'],['class'=>'form-control', 'id' => 'member_last_number']) !!}
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {!! Form::label('member_number_mode','Numeracion de miembros') !!}
                                                {!! Form::select('member_number_mode',array('0' => 'Manual', '1' => 'Automatico'),$settings['member_number_mode'],['class'=>'form-control selectpicker show-tick show-menu-arrow', 'id' => 'member_number_mode']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charges Settings -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel no-border">
                        <div class="panel-title">
                            <div class="panel-head font-size-15"><i class="fa fa-dollar"></i> Cargos</div>
                        </div>

                        <div class="panel-body">
                            <div class="row"><!--Main row start-->
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {!! Form::label('admission_fee','Cargos de admision') !!}
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="fa fa-money"></i></div>
                                                    {!! Form::text('admission_fee',$settings['admission_fee'],['class'=>'form-control', 'id' => 'admission_fee']) !!}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {!! Form::label('taxes','Porcentaje adicional') !!}
                                                <div class="input-group">
                                                    {!! Form::text('taxes',$settings['taxes'],['class'=>'form-control', 'id' => 'taxes']) !!}
                                                    <div class="input-group-addon"><i class="fa fa-percent"></i></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {!! Form::label('discounts','Descuentos disponibles') !!}
                                                {!! Form::text('discounts',$settings['discounts'],['class'=>'form-control tokenfield', 'id' => 'discounts', 'placeholder' => 'Ingrese el porcentaje y presione enter']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form Submission -->
            <div class="row">
                <div class="col-sm-2 pull-right">
                    <div class="form-group">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary pull-right']) !!}
                    </div>
                </div>
            </div>
            {!! Form::Close() !!}
        </div>
    </div>
@stop

@section('footer_scripts')
    <script src="{{ URL::asset('assets/js/setting.js') }}" type="text/javascript"></script>
@stop

@section('footer_script_init')
    <script type="text/javascript">
        gymie.loadBsTokenInput();
    </script>
@stop