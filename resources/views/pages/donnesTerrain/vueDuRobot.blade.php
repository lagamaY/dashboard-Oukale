@extends('app')

@section('titre')
    Oukalê - Vue du Robot
@endsection

@section('contenu')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <!-- 1 -->
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Statut du robot</h4>
                  <!-- <canvas id="lineChart"></canvas> -->
                  <p class="classVueEnsemleRobot">En ligne</p>
                  
                </div>
              </div>
            </div>
            <!-- 2 -->
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Niveau de la batterie </h4>
                  <!-- <canvas id="barChart"></canvas> -->
                  <p class="classVueEnsemleRobot">16 %</p>
                 
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- 1 -->
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Capacité de stockage disponible</h4>
                  <!-- <canvas id="areaChart"></canvas> -->
                  <p class="classVueEnsemleRobot">128 GB</p>

                </div>
              </div>
            </div>
            <!-- 2 -->
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> état des caméras</h4>
                  <!-- <canvas id="doughnutChart"></canvas> -->
                  <p class="classVueEnsemleRobot">Bon</p>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <!-- content-wrapper ends -->
        
      </div>
@endsection