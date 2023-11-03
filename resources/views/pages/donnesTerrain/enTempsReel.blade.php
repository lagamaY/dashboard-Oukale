@extends('app')

@section('titre')
Oukalê - Donnée en Temps Réel
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

</style>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Détection de présence des victimes</h4> -->
                        <h4 class="card-title">Caméra du robot</h4>
                        <!-- <canvas id="lineChart"></canvas> -->
                        <!-- <p class="classEnTantReel">Vidéo en direct</p> -->
                                @if (!empty($raspberryPiCamera))
                                <img id="raspberryPiCamera"
                                    src="http://oukale-robot:8080/stream?topic=/image_view/output"
                                    alt="Flux vidéo en direct">
                                @else
                                <p class="classEnTantReel">Données non disponibles</p>
                                @endif


                        <!-- <img id="raspberryPiCamera" src="http://oukale-robot:8080/stream?topic=/image_view/output"
                            alt="Flux vidéo en direct"> -->

                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Nombre de Victime(s) détectée(s)</h4> -->
                        <h4 class="card-title">Intensité sonore</h4>
                        @if (!empty($dbsense))
            <p id="dbsenseStrength" class="classEnTantReel">{{$dbsense}}</p>
        @else
            <p class="classEnTantReel">Données non disponibles</p>
        @endif
                        <!-- <p id="dbsenseStrength" class="classEnTantReel">{{$dbsense}}</p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Température actuelle</h4>
                        @if (!empty($temperature))
            <p id="temperature" class="classEnTantReel">{{$temperature}}</p>
        @else
            <p class="classEnTantReel">Données non disponibles</p>
        @endif
                        <!-- <canvas id="areaChart"></canvas> -->
                        <!-- <p id="temperature" class="classEnTantReel">{{$temperature}}</p> -->

                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Taux d'oxygène dans l'air</h4> -->
                        <h4 class="card-title">Intensité lumineuse</h4>
                        <!-- <canvas id="doughnutChart"></canvas> -->
                        @if (!empty($light))
            <p id="lightSensor" class="classEnTantReel">{{$light}}</p>
        @else
            <p class="classEnTantReel">Données non disponibles</p>
        @endif
                        <!-- <p id="lightSensor" class="classEnTantReel">{{$light}}</p> -->
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>

        // function rafraichirImage() {
        //     var image = document.getElementById('raspberryPiCamera');
        //     image.src = "http://oukale-robot:8080/stream?topic=/image_view/output" + new Date().getTime();
        // }

        // // Rafraîchir l'image toutes les 5 secondes (5000 millisecondes)
        // setInterval(rafraichirImage, 10000);
    </script>

    <!-- content-wrapper ends -->

</div>
@endsection
