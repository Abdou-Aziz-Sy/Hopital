@extends('layouts.app')

@section('content')
<style>
  p,h2,span{
    color:white;
  }
</style>
  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                A Propos de <span>Nous</span>
              </h2>
            </div>
            <p>
            MEDCollect priorise une interface conviviale pour la collecte des données médicales des patients, tout en garantissant la sécurité et la confidentialité des informations. L'application inclurait des fonctionnalités telles que la gestion des dossiers médicaux électroniques, la planification des rendez-vous en ligne, et la communication sécurisée entre les patients et les professionnels de santé. L'objectif serait de faciliter le flux d'informations tout en améliorant l'efficacité des soins et la satisfaction des patients de l'hopital Dantec de Ouroussogui, Kolda, Touba.
            </p>
            <a href="">
              En Savoir Plus
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection