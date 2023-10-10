@extends('app')

@section('titre')
    Oukalê - Archive
@endsection

@section('contenu')
     <!-- partial -->
     <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Détection De Présence Des Victimes</h4>
                  <canvas id="lineChart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Prédiction De Taux D'oxygène</h4>
                  <canvas id="doughnutChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Localisation</h4>
                    <canvas id=""></canvas>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Température</h4>
                    <canvas id="areaChart"></canvas>
                    </div>
                </div>
                </div>
            </div>
         
        </div>
        <!-- content-wrapper ends -->
        
      <!-- main-panel ends -->
@endsection