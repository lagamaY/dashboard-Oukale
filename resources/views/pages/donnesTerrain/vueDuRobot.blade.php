@extends('app')

@section('titre')
Oukalê - Vue du Robot
@endsection

@section('contenu')
<style>
/* Style des cartes */
.card {
background: #f6f7fb;
border: 1px solid #d1d3e2;
border-radius: 15px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
transition: transform 0.2s ease;
text-align: center;
}

.card:hover {
transform: scale(1.02);
}

.card-title {
font-size: 1.5rem;
margin: 10px 0;
color: #2cbb9b;
}

/* Style des données */
.classVueEnsembleRobot {
font-size: 2rem;
color: #dc3545;
font-weight: bold;
margin: 20px 0;
}

/* Style des en-têtes */
.card-title {
background: #2cbb9b;
color: #fff;
padding: 10px;
border-top-left-radius: 5px;
border-top-right-radius: 5px;
}

/* Animation de changement de couleur pour les en-têtes */
.card:hover .card-title {
animation: colorChange 10s infinite alternate;
color: #fff;
}

@keyframes colorChange {
0% {
background: #2cbb9b;
}
25% {
background: #04364A;
}
50% {
background: #176B87;
}
75% {
background: #64CCC5;
}
100% {
background: #2cbb9b;
}
}


/* Styles généraux */
.content-wrapper {
margin-top: 20px;
}

/* Styles spécifiques */
.statut-robot, .niveau-batterie, .capacite-stockage, .etat-cameras {
/* Bords légèrement arrondis */
border-radius: 10px;

/* Choix des couleurs */
}

/* Animation de l'affichage du texte */
.classVueEnsembleRobot {
/* Animation des zones où les données apparaissent */
animation: text-reveal 0.5s ease-in-out;
}

@keyframes text-reveal {
from {
opacity: 0;
transform: translateY(-10px);
}
to {
opacity: 1;
transform: translateY(0);
}
}

</style>
<div class="-rotate-90main-panel">
    <div class="content-wrapper">
        <div class="row">
            <!-- 1 -->
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Statut du robot</h4>
                        <!-- <canvas id="lineChart"></canvas> -->
                        <p class="classVueEnsemleRobot">@if (!empty($status))
                            {{$status}}
                            @else
                            Données non disponibles
                            @endif</p>


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
