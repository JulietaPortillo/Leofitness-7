<div class="row">
    <div class="col-md-12">
        <div class="panel no-border ">
            <div class="panel-title">
                <div class="panel-head font-size-20">Detalles del pago</div>
            </div>
            <div class="panel-body">
                <table id="_payment" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Monto Recibido </th>
                        <th>Como</th>
                        <th>En</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach ($invoice->payment_details as $payment_detail)
                            <td>{{ $payment_detail->payment_amount }}</td>
                            <td>{{ Utilities::getPaymentMode ($payment_detail->mode) }}</td>
                            <td>{{ $payment_detail->created_at->toDayDateTimeString() }}</td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div><!-- / Panel-Body -->
        </div><!-- / Panel-no-border -->
    </div><!-- / Main-Col -->
</div><!-- / Main-Row -->