@extends('layouts.master')

@section('content')

    <hr>
    @include('helper.validator')

    <section class="cryptos-feature-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="panel-heading">
                                    <h2 class="text-center">S'inscrire</h2><br>
                                </div>
                                <div class="panel-body">
                                    <form action="{{url('/signup')}}" method="post" role="form">
                                        @csrf
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Noms & Prenom" type="text" name="customer_name">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Contact" type="text" name="customer_contact">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Email" type="email" name="customer_email">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Mot de passe" type="password" name="customer_password">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="customer_contry">
                                                <option >Votre Pays</option>
                                                <option value="Cote d'ivoire">Cote d'ivoire</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Guinée">Guinée</option>
                                                <option value="Burkina faso">Burkina faso</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Togo">Togo</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">Inscription</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <h2 class="or">ou</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h2 class="text-center">Se connecter</h2><br>
                                </div>
                                <div class="panel-body">
                                    <form action="{{url('/signin')}}" method="post" role="form">
                                        @csrf
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Email" name="customer_email" type="email">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Mot de passe" name="customer_password" type="password">
                                        </div>

                                        <div class="form-group form-check">
                                            <input class="form-check-input" type="checkbox" id="check">
                                            <label for="check" class="form-check-label">Rester connecté</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">Connexion</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>

@endsection
