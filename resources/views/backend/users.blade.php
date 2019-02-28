@extends('layouts.backend')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            @include('helper.validator')
            <br>
            <h1 class="page-header">Utilisateurs</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Liste des utilisateurs
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Nom & Prénoms</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Pays</th>
                            <th>Solde</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if (count($users)> 0)
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->customer_name}}</td>
                                    <td class="center">{{$user->customer_email}}</td>
                                    <td class="center">{{$user->customer_contact}}</td>
                                    <td class="center">{{$user->customer_contry}}</td>
                                    <td class="center">{{$user->customer_solde}} FCFA</td>

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
