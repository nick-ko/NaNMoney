@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Transfert d'argent</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Effectué une nouvelle operation
                </div>
                <div class="panel-body">
                    @include('helper.validator')
                    <div class="row">
                        <form role="form" action="{{URL::to('/save-transfert')}}" method="POST" enctype="multipart/form-data">
                            <div class="col-lg-6">
                                @csrf
                                <h3 class="text-center">Vos infos</h3>
                                <div class="form-group">
                                    <label>Votre Nom</label>
                                    <input class="form-control" name="sender_name" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Votre Numero</label>
                                    <input class="form-control" name="sender_number" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="text-center">infos Destinateur</h3>
                                <div class="form-group">
                                    <label>Nom Destinateur</label>
                                    <input class="form-control" name="receiver_name" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Numero Destinateur</label>
                                    <input class="form-control" name="receiver_number" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10 ">
                                    <div class="form-group">
                                        <label>Montant</label>
                                        <input class="form-control" name="transfert_montant" type="number">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="submit" value="Envoyer" class="btn btn-primary btn-block">
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
