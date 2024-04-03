@extends('layouts.app')

@section('content')
<section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="detail-box">
                                <h1>
                                    NOUS FOURNISSONS LES MEILLEURS SOINS DE SANTÉ
                                </h1>
                                <p>
                                    Nous cherchons à faciliter le travail des médecins.
                                    A prévenir les maladies rares.
                                </p>
                                <div class="btn-box">
                                    <a href="{{ url('/propos') }}" class="btn1">
                                        En Savoir Plus
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="detail-box">
                                <h1>
                                    We Provide Best Healthcare
                                </h1>
                                <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic?
                                    Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel
                                    architecto veritatis delectus repellat modi impedit sequi.
                                </p>
                                <div class="btn-box">
                                    <a href="" class="btn1">
                                        En Savoir Plus
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="detail-box">
                                <h1>
                                    We Provide Best Healthcare
                                </h1>
                                <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic?
                                    Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel
                                    architecto veritatis delectus repellat modi impedit sequi.
                                </p>
                                <div class="btn-box">
                                    <a href="" class="btn1">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
    </div>

</section>
<!-- end slider section -->
</div>


<!-- department section -->

<section class="department_section layout_padding">
    <div class="department_container">
        <div class="container ">
            <div class="heading_container heading_center">
                <h2>
                    Nos Departements
                </h2>
                <p>
                    Découvrez les différents départements en médecine
                </p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="box ">
                        <div class="img-box">
                            <img style="background-image:url({{asset('/img/s1.png')}})" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Cardiologie
                            </h5>
                            <p>
                                Nous réglons vos problèmes de Coeur.
                                La cardiologie est la spécialité de la médecine qui étudie le cœur et les vaisseaux. La cardiologie porte sur la prévention, le diagnostic, la prise en charge et la réadaptation de patients présentant des maladies du système cardiovasculaire.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box ">
                        <div class="img-box">
                            <img style="background-image:url({{ asset('/img/s1.png') }})" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Diagnostic
                            </h5>
                            <p>
                                Aider les médecins à détecter les maladies rares.
                                démarche par laquelle,le médecin, généraliste ou spécialiste, le kinésithérapeute, la sage-femme ou le chirurgien-dentiste, ou encore le psychologue au Canada, détermine l'affection dont souffre le patient, et qui permet de proposer un traitement.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box ">
                        <div class="img-box">
                            <img style="background-image:url({{asset('/img/s3.png')}})" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Chirurgie
                            </h5>
                            <p>
                                Chirurgie thoracique.
                                Chirurgie maxillofaciale.
                                Chirurgie réparatrice, plastique et esthétique.
                                Chirurgie pédiatrique.
                                Chirurgie vasculaire.
                                Chirurgie orthopédique.
                                Chirurgie viscérale et digestive.
                                Neurochirurgie. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box ">
                        <div class="img-box">
                            <img style="background-image:url({{asset('/img/s4.png')}})" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Premiers Secours
                            </h5>
                            <p>
                                Les premiers secours sont l'ensemble des techniques d'aide apportée aux personnes victimes d'un accident, d'une catastrophe, d'un problème de santé ou d'un problème social compromettant à court terme leur état de santé. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    Voir Tout
                </a>
            </div>
        </div>
    </div>
</section>

<!-- end department section -->

<!-- about section -->

<section class="about_section layout_margin-bottom">
    <div class="container  ">
        <div class="row">
            <div class="col-md-6 ">
                <div class="img-box">
                    <img style="background-image:url({{asset('/img/about-img.jpg')}})" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            A Propos <span>Nous</span>
                        </h2>
                    </div>
                    <p>
                        MEDCollect priorise une interface conviviale pour la collecte des données médicales des patients, tout en garantissant la sécurité et la confidentialité des informations. L'application inclurait des fonctionnalités telles que la gestion des dossiers médicaux électroniques, la planification des rendez-vous en ligne, et la communication sécurisée entre les patients et les professionnels de santé. L'objectif serait de faciliter le flux d'informations tout en améliorant l'efficacité des soins et la satisfaction des patients de l'hopital Dantec de Ouroussogui, Kolda, Touba.
                    </p>
                    <a href="">
                        Lire Tout
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end about section -->

<!-- doctor section -->

<section class="doctor_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Nos Médecins
            </h2>
            <p class="col-md-10 mx-auto px-0">
                Découvrez les médicaux spécialistes travaillant dans nos Hopitaux.
            </p>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4 mx-auto">
                <div class="box">
                    <div class="img-box">
                        <img style="background-image:url({{asset('/img/d1.jpg')}})" alt="">
                    </div>
                    <div class="detail-box">
                        <div class="social_box">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </div>
                        <h5>
                            Ousseynou Seck
                        </h5>
                        <h6 class="">
                            Docteur
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mx-auto">
                <div class="box">
                    <div class="img-box">
                        <img style="background-image:url({{asset('/img/d2.jpg')}})" alt="">
                    </div>
                    <div class="detail-box">
                        <div class="social_box">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </div>
                        <h5>
                            Anna Coumba Carrie Bathily
                        </h5>
                        <h6 class="">
                            Doctoresse
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mx-auto">
                <div class="box">
                    <div class="img-box">
                        <img style="background-image:url({{asset('/img/d3.jpg')}})" alt="">
                    </div>
                    <div class="detail-box">
                        <div class="social_box">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-youtube" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </div>
                        <h5>
                            Fatou Doukouré
                        </h5>
                        <h6 class="">
                            Doctoresse / Assistante
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-box">
            <a href="">
                Voir Tout
            </a>
        </div>
    </div>
</section>

<!-- end doctor section -->

<!-- contact section -->
<section class="contact_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Entrer en contact avec nous
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form_container contact-form">
                    <form action="">
                        <div class="form-row">
                            <div class="col-lg-6">
                                <div>
                                    <input type="text" placeholder="Your Name" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <input type="text" placeholder="Phone Number" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <input type="email" placeholder="Email" />
                        </div>
                        <div>
                            <input type="text" class="message-box" placeholder="Message" />
                        </div>
                        <div class="btn_box">
                            <button>
                                ENVOYER
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="map_container">
                    <div class="map">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection