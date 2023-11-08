<?php use Carbon\Carbon; ?>

<!-- Hidden Fields -->
@if(Request::is('members/create'))
    {!! Form::hidden('invoiceCounter',$invoiceCounter) !!}
    {!! Form::hidden('memberCounter',$memberCounter) !!}
@endif

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('member_code','Codigo del miembro') !!}
            {!! Form::text('member_code',$member_code,['class'=>'form-control', 'id' => 'member_code', ($member_number_mode == \constNumberingMode::Auto ? 'readonly' : '')]) !!}
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('name','Nombre',['class'=>'control-label']) !!}
            {!! Form::text('name',null,['class'=>'form-control', 'id' => 'name']) !!}
        </div>
    </div>
</div>

<div class="row">

    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('DOB','Fecha de nacimiento') !!}
            {!! Form::text('DOB',null,['class'=>'form-control datepicker-default', 'id' => 'DOB']) !!}
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('gender','Genero') !!}
            {!! Form::select('gender',array('m' => 'Masculino', 'f' => 'Femenino'),null,['class'=>'form-control selectpicker show-tick show-menu-arrow', 'id' => 'gender']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('contact','Contacto') !!}
            {!! Form::text('contact',null,['class'=>'form-control', 'id' => 'contact']) !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('email','Correo') !!}
            {!! Form::text('email',null,['class'=>'form-control', 'id' => 'email']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('emergency_contact','Contacto de emergencia') !!}
            {!! Form::text('emergency_contact',null,['class'=>'form-control', 'id' => 'emergency_contact']) !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('health_issues','DPI') !!}
            {!! Form::text('health_issues',null,['class'=>'form-control', 'id' => 'health_issues', 'pattern' => '[0-9]*']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('proof_name','Nombre preferido') !!}
            {!! Form::text('proof_name',null,['class'=>'form-control', 'id' => 'proof_name']) !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
        {!! Form::label('status','Status') !!}
        <!--0 for inactive , 1 for active-->
            {!! Form::select('status',array('1' => 'Activo', '0' => 'InActivo'),null,['class' => 'form-control selectpicker show-tick show-menu-arrow', 'id' => 'status']) !!}
        </div>
    </div>
    
</div>



<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('aim','Porque se esta uniendo?',['class'=>'control-label']) !!}
            {!! Form::select('aim',array('0' => 'Fitness', '1' => 'Rutina', '2' => 'Yoga', '3' => 'Perder peso', '4' => 'Ganar musculo', '5' => 'Otros'),null,['class' => 'form-control selectpicker show-tick show-menu-arrow', 'id' => 'aim']) !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('source','Como nos encontro?',['class'=>'control-label']) !!}
            {!! Form::select('source',array('0' => 'Promociones', '1' => 'Redes Sociales', '2' => 'Otros'),null,['class' => 'form-control selectpicker show-tick show-menu-arrow', 'id' => 'source']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    {!! Form::label('occupation','Ocupacion') !!}
                    {!! Form::select('occupation',array('0' => 'Estudiante', '1' => 'No Trabaja','2' => 'Propio','3' => 'Profesional','4' => 'Otros'),null,['class' => 'form-control selectpicker show-tick show-menu-arrow', 'id' => 'occupation']) !!}
                </div>
            </div>


            <div class="col-sm-12">
                <div class="form-group">
                    {!! Form::label('pin_code','Pin',['class'=>'control-label']) !!}
                    {!! Form::text('pin_code',null,['class'=>'form-control', 'id' => 'pin_code']) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('address','Direccion') !!}
            {!! Form::textarea('address',null,['class'=>'form-control', 'id' => 'address', 'rows' => 5]) !!}
        </div>
    </div>
</div>