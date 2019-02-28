@extends('layouts.backend')

@section('content')


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Back-end</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-bitcoin fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{count($transactions)}}</div>
                            <div>Transaction effectuée</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('/transactions')}}">
                    <div class="panel-footer">
                        <span class="pull-left">Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6" style="height:400px;">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{count($users)}}</div>
                            <div>Utilisateurs</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('/users')}}">
                    <div class="panel-footer">
                        <span class="pull-left"> Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- /.row -->
@endsection
