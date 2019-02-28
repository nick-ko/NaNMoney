@extends('layouts.backend')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            @include('helper.validator')
            <br>
            <h1 class="page-header">Transactions</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Liste des transactions
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Expediteur</th>
                            <th>N° Expediteur</th>
                            <th>Destinateur</th>
                            <th>N° Destinateur</th>
                            <th>Montant</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if (count($transactions)> 0)
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td class="center">{{$transaction->sender_name}}</td>
                                    <td class="center">{{$transaction->sender_number}}</td>
                                    <td class="center">{{$transaction->receiver_name}}</td>
                                    <td class="center">{{$transaction->receiver_number}} </td>
                                    <td class="center">{{$transaction->transfert_montant}} FCFA</td>
                                    <td class="center">{{$transaction->created_at}} </td>
                                    <td>
                                        <a class="btn btn-info" href="">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="">
                                            <i class="fa fa-trash" id="delete"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
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
