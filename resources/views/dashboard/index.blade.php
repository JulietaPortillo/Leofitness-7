@extends('app')

@section('content')

    <div class="rightside bg-grey-100">
        <div class="container-fluid">
            @include('flash::message')
            @permission(['manage-gymie','view-dashboard-quick-stats'])
            <!-- Stat Tile  -->
            <div class="row margin-top-10">
                <!-- Total Members -->
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    @include('dashboard._index.totalMembers')
                </div>

                <!-- Registrations This Weeks -->
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    @include('dashboard._index.registeredThisMonth')
                </div>

                <!-- Inactive Members -->
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    @include('dashboard._index.inActiveMembers')
                </div>

                <!-- Members Expired -->
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    @include('dashboard._index.expiredMembers')
                </div>

                <!-- Outstanding Payments -->
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    @include('dashboard._index.outstandingPayments')
                </div>

                <!-- Collection -->
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    @include('dashboard._index.collection')
                </div>
            </div>
            @endpermission

            <!--Member Quick views -->
            <div class="row"> <!--Main Row-->
                @permission(['manage-gymie','view-dashboard-members-tab'])
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-title">
                            <div class="panel-head"><i class="fa fa-users"></i><a href="{{ action('MembersController@index') }}">Miembros</a></div>
                            <div class="pull-right"><a href="{{ action('MembersController@create') }}" class="btn-sm btn-primary active" role="button"><i
                                            class="fa fa-user-plus"></i> Agregar</a></div>
                        </div>

                        <div class="panel-body with-nav-tabs">
                            <!-- Tabs Heads -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#expiring" data-toggle="tab">Expirando<span
                                                class="label label-warning margin-left-5">{{ $expiringCount }}</span></a></li>
                                <li><a href="#expired" data-toggle="tab">Expirados<span class="label label-danger margin-left-5">{{ $expiredCount }}</span></a>
                                </li>
                                <li><a href="#birthdays" data-toggle="tab">Cumpleaños<span class="label label-success margin-left-5">{{ $birthdayCount }}</span></a>
                                </li>
                                <li><a href="#recent" data-toggle="tab">Recientes</a></li>
                            </ul>

                            <!-- Tab Content -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="expiring">
                                    @include('dashboard._index.expiring', ['expirings' => $expirings])
                                </div>

                                <div class="tab-pane fade" id="expired">
                                    @include('dashboard._index.expired', ['allExpired' => $allExpired])
                                </div>

                                <div class="tab-pane fade" id="birthdays">
                                    @include('dashboard._index.birthdays', ['birthdays' => $birthdays])
                                </div>

                                <div class="tab-pane fade" id="recent">
                                    @include('dashboard._index.recents', ['recents' =>  $recents])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endpermission

                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-title">
                            <div class="panel-head"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>Cheques</div>
                        </div>

                        <div class="panel-body with-nav-tabs">
                            <!-- Tabs Heads -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#recieved" data-toggle="tab">Recibidos<span
                                                class="label label-warning margin-left-5">{{ $recievedChequesCount }}</span></a></li>
                                <li><a href="#deposited" data-toggle="tab">Depositados<span
                                                class="label label-primary margin-left-5">{{ $depositedChequesCount }}</span></a></li>
                                <li><a href="#bounced" data-toggle="tab">Sin fondos<span class="label label-danger margin-left-5">{{ $bouncedChequesCount }}</span></a>
                                </li>
                            </ul>

                            <!-- Tab Content -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="recieved">
                                    @include('dashboard._index.receivedCheque', ['recievedCheques' =>  $recievedCheques])
                                </div>

                                <div class="tab-pane fade" id="deposited">
                                    @include('dashboard._index.depositedCheques', ['depositedCheques' =>  $depositedCheques])
                                </div>

                                <div class="tab-pane fade" id="bounced">
                                    @include('dashboard._index.bouncedCheques', ['bouncedCheques' =>  $bouncedCheques])
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @permission(['manage-gymie','view-dashboard-charts'])
            <div class="row">
            

                <div class="col-lg-12">
                    <div class="panel bg-white">
                        <div class="panel-title">
                            <div class="panel-head">Miembros por plan</div>
                        </div>
                        <div class="panel-body padding-top-10">
                            @if(!empty($membersPerPlan))
                                <div id="gymie-members-per-plan" class="chart"></div>
                            @else
                                <div class="tab-empty-panel font-size-24 color-grey-300">
                                    <div id="gymie-members-per-plan" class="chart"></div>
                                    Sin datos
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel bg-white">
                        <div class="panel-title bg-transparent no-border">
                            <div class="panel-head">Tendencia de registro</div>
                        </div>
                        <div class="panel-body no-padding-top">
                            <div id="gymie-registrations-trend" class="chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endpermission
        </div>
    </div>
@stop

@section('footer_scripts')
    <script src="{{ URL::asset('assets/plugins/morris/raphael-2.1.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
@stop

@section('footer_script_init')
    <script type="text/javascript">
        $(document).ready(function () {
            gymie.loadmorris();
        });
    </script>
@stop
