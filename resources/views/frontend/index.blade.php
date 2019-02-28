@extends('layouts.master')

@section('content')

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area" id="home">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-7">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Rapide. <span>Fiable.</span><span>Simple.</span></h2>
                                <h6 data-animation="fadeInUp" data-delay="400ms">NaNMoney propose des moyens rapides et fiables pour envoyer de l'argent.</h6>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="hero-slides-thumb" data-animation="fadeInUp" data-delay="1000ms">
                                <img src="{{URL::to('image/1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-7">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Envoyez et recevez de <span>l'argent</span> </h2>
                                <h6 data-animation="fadeInUp" data-delay="400ms">en toute sécurité, partout dans le monde</h6>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="hero-slides-thumb" data-animation="fadeInUp" data-delay="1000ms">
                                <img src="{{URL::to('image/3.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### About Area Start ##### -->

    <section class="cryptos-about-area" id="about">
        <br>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-thumbnail mb-100">
                        <img src="{{URL::to('image/2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-content mb-100">
                        <div class="section-heading">
                            <h3>Changeons <br><span>le monde</span> ensemble</h3>
                            <h5>Envoyer de l'argent en quelques clics Accédez à votre historique de transaction Bénéficiez des avantages NaNMoney</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ##### Course Area Start ##### -->
    <div class="cryptos-feature-area section-padding-100-0" id="service">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto">
                        <h3>Pourquoi<br>utiliser  <span>NaNMoney</span> ?</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Course Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-feature-area mb-100 text-center">
                        <h3>Rapide &amp; Facile</h3>
                        <p>Avec un réseau de 350 000 agences à travers le monde, il est pratique de recevoir et d'envoyer de l'argent avec NaNMoney <br><br><br></p>
                        <a href="#" class="btn cryptos-btn">Plus d'info</a>
                    </div>
                </div>

                <!-- Single Course Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-feature-area  mb-100 text-center">
                        <h3>Retrait d'espèces</h3>
                        <p>Retrait des espèces auprès d’un point de collecte en quelques minutes <br><br><br><br></p>
                        <a href="#" class="btn cryptos-btn">Plus d'info</a>
                    </div>
                </div>

                <!-- Single Course Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-feature-area mb-100 text-center">
                        <h3>Faible Commisions</h3>
                        <p>Nos commissions et nos taux de change sont indiqués explicitement <br><br><br><br></p>
                        <a href="#" class="btn cryptos-btn">Plus d'info</a>
                    </div>
                </div>

                <!-- Single Course Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-feature-area mb-100 text-center">
                        <h3>100% Securisé</h3>
                        <p>Notre technologie leader protège votre argent et garantit toujours son arrivée à bon port.
                            Nous sommes en parfaite conformité avec la réglementation en vigueur </p>
                        <a href="#" class="btn cryptos-btn">Plus d'info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Course Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0 " id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="elements-title mb-100">
                        <h2 class="text-center">Nous Contacter</h2>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-12 col-lg-6">
                    <div class="contact-information mb-100">

                        <!-- Contact Logo -->
                        <div class="contact-logo mb-50">
                            <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <h3>Avec nous, votre argent est entre de bonnes mains.</h3>

                        <!-- Contact Social Info -->
                        <div class="contact-social-info d-flex mt-50 mb-50">
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex">
                            <div class="contact-icon mr-15">
                                <i class="fa fa-map"></i>
                            </div>
                            <p>7/ BP Plateau,  Indenié, CI</p>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex">
                            <div class="contact-icon mr-15">
                                <i class="fa fa-phone"></i>
                            </div>
                            <p>+225 00-00-00-00 </p>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex">
                            <div class="contact-icon mr-15">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <p>gmail@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-6">
                    <div class="contact-form-area mb-100">
                        <form action="#" method="post">
                            <input type="text" class="form-control" id="name" placeholder="Votre Nom">
                            <input type="email" class="form-control" id="email" placeholder="Votre E-mail">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Votre Message"></textarea>
                            <button class="btn cryptos-btn btn-2 mt-30" type="submit">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

@endsection
