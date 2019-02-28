@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            @include('helper.validator')
            <br>
            <h1 class="page-header">Historique de vos transactions</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Historique
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Receveur</th>
                            <th>Montant</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if (count($transactions)> 0)
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{$transaction->receiver_name}}</td>
                                    <td class="center">{{$transaction->transfert_montant}} FCFA</td>
                                    <td class="center">{{$transaction->created_at}}</td>
                                    <td class="center">transfert</td>
                                    <td class="center">
                                        <a class="btn btn-success" href="">
                                            <i class="fa fa-thumbs-up"></i>
                                        </a>
                                    </td>
                                </tr>
                        </tbody>
                         @endforeach
                        @endif
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    </div><!--/row-->
@endsection
