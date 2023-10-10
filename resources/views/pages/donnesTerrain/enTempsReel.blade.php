@extends('app')

@section('titre')
    Oukalê - Donnée en Temps Réel
@endsection

@section('contenu')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Détection de présence des victimes</h4>
                  <!-- <canvas id="lineChart"></canvas> -->
                  <canvas id=""></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Prédiction de taux d'oxygène</h4>
                  <!-- <canvas id="barChart"></canvas> -->
                  <canvas id=""></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Localisation du robot</h4>
                  <!-- <canvas id="areaChart"></canvas> -->
                  <canvas id=""></canvas>

                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Température</h4>
                  <!-- <canvas id="doughnutChart"></canvas> -->
                  <canvas id=""></canvas>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <!-- content-wrapper ends -->
        
      </div>
@endsection