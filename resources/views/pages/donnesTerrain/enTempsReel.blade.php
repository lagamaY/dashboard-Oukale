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
                  <!-- <h4 class="card-title">Détection de présence des victimes</h4> -->
                  <!-- <canvas id="lineChart"></canvas> -->
                  <p class="classEnTantReel">Vidéo en direct</p>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Nombre de Victime(s) détectée(s)</h4>
                  <p class="classEnTantReel">15</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Température actuelle</h4>
                  <!-- <canvas id="areaChart"></canvas> -->
                  <p class="classEnTantReel">20°C</p>

                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Taux d'oxygène dans l'air</h4>
                  <!-- <canvas id="doughnutChart"></canvas> -->
                  <p class="classEnTantReel"> 19 %</p>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <!-- content-wrapper ends -->
        
      </div>
@endsection