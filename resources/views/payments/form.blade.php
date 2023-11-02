<div class="panel-body">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <?php  $invoiceList = App\Invoice::lists('invoice_number', 'id'); ?>
                {!! Form::label('invoice_id','Numero del recibo') !!}
                {!! Form::select('invoice_id',$invoiceList,(isset($invoice) ? $invoice->id : null),['class'=>'form-control selectpicker show-tick show-menu-arrow', 'id' => 'invoice_id', 'data-live-search'=> 'true']) !!}
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('payment_amount','Monto') !!}
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-money"></i></div>
                    {!! Form::text('payment_amount',(isset($invoice) ? $invoice->pending_amount : null),['class'=>'form-control', 'id' => 'payment_amount']) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('mode','Metodo') !!}
                {!! Form::select('mode',array('1' => 'Efectivo', '0' => 'Transferencia'),(isset($payment_detail) ? $payment_detail->mode : null),['class'=>'form-control selectpicker show-tick show-menu-arrow', 'id' => 'mode']) !!}
            </div>
        </div>
    </div>

    <div id="chequeDetails">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('number','Numero de transferencia') !!}
                    {!! Form::text('number',(isset($cheque_detail) ? $cheque_detail->number : null),['class'=>'form-control', 'id' => 'number']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('date','Fecha de transferencia') !!}
                    {!! Form::text('date',(isset($cheque_detail) ? $cheque_detail->date : null),['class'=>'form-control datepicker-default', 'id' => 'date']) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary pull-right']) !!}
            </div>
        </div>
    </div>
</div>
