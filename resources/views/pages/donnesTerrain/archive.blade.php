@extends('app')

@section('titre')
    Oukalê - Archive
@endsection

@section('contenu')
<div class="content-wrapper">
                <div class="row">
                    <div class="col-12 col-xl-6 grid-margin stretch-card">
                    <div class="row w-100 flex-grow">
                        <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <p class="card-title">Victimes</p>
                            <p class="text-muted"></p>
                            <div class="row mb-3">
                                <div class="col-md-7">
                                <div class="d-flex justify-content-between traffic-status">
                                    <div class="item">
                                    <p class="mb-">Total</p>
                                    <h5 class="font-weight-bold mb-0">2000</h5>
                                    <div class="color-border"></div>
                                    </div>
                                    <div class="item">
                                    <p class="mb-">Sécourus</p>
                                    <h5 class="font-weight-bold mb-0">1850</h5>
                                    <div class="color-border">150</div>
                                    </div>
                                    <div class="item">
                                    <p class="mb-">Décédées</p>
                                    <h5 class="font-weight-bold mb-0">150</h5>
                                    <div class="color-border"></div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-5">
                                <ul class="nav nav-pills nav-pills-custom justify-content-md-end" id="pills-tab-custom"
                                    role="tablist">
                                    <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab-custom" data-toggle="pill"
                                        href="#pills-health" role="tab" aria-controls="pills-home" aria-selected="true">
                                        Jour
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab-custom" data-toggle="pill" href="#pills-career"
                                        role="tab" aria-controls="pills-profile" aria-selected="false">
                                        Sem
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab-custom" data-toggle="pill" href="#pills-music"
                                        role="tab" aria-controls="pills-contact" aria-selected="false">
                                        Mois
                                    </a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <canvas id="audience-chart"></canvas>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6 stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <p class="card-title">Taux d'oxygène des zones explorées</p>
                                <p class="text-success font-weight-medium"></p>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mb-3">
                                <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 me-3"></h5>
                                <p class="text-muted mb-0"></p>
                            </div>
                            <canvas id="balance-chart" height="130"></canvas>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6 stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <p class="card-title">Température des zones explorées</p>
                                <p class="text-success font-weight-medium"></p>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mb-3">
                                <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 me-3"></h5>
                                <p class="text-muted mb-0"></p>
                            </div>
                            <canvas id="task-chart" height="130"></canvas>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-12 col-xl-6 grid-margin stretch-card">
                    <div class="row w-100 flex-grow">
                        <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <p class="card-title">Zones explorées</p>
                            <p class="text-muted">Dernière mise à jour: il y a 2 heures</p>
                            <div class="regional-chart-legend d-flex align-items-center flex-wrap mb-1"
                                id="regional-chart-legend"></div>
                            <canvas height="280" id="regional-chart"></canvas>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                            <div class="d-flex align-items-center mb-4">
                                <p class="card-title mb-0 me-1">Alertes</p>
                                <div class="badge badge-info badge-pill">2</div>
                            </div>
                            <div class="d-flex flex-wrap pt-2">
                                <div class="me-4 mb-lg-2 mb-xl-0">
                                <p>Fausses alertes</p>
                                <h4 class="font-weight-bold mb-0">77.15 %</h4>
                                </div>
                                <div >
                                <p>Alertes réelles</p>
                                <h4 class="font-weight-bold mb-0">14.15 %</h4>
                                </div>
                            </div>
                            </div>
                            <canvas height="150" id="activity-chart"></canvas>
                        </div>
                        </div>
                        <div class="col-md-12 stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                            <p class="card-title">Etat du robot</p>
                            <div class="d-flex justify-content-between flex-wrap">
                                <p class="text-muted">Dernière mise à jour: Hier</p>
                                <div class="d-flex align-items-center flex-wrap server-status-legend mt-3 mb-3 mb-md-0">
                                <div class="item me-3">
                                    <div class="d-flex align-items-center">
                                    <div class="color-bullet"></div>
                                    <h5 class="font-weight-bold mb-0">128GB</h5>
                                    </div>
                                    <p class="mb-">Espace total</p>
                                </div>
                                <div class="item me-3">
                                    <div class="d-flex align-items-center">
                                    <div class="color-bullet"></div>
                                    <h5 class="font-weight-bold mb-0">100GB</h5>
                                    </div>
                                    <p class="mb-">Déjà utilisé</p>
                                </div>
                                <div class="item me-3">
                                    <div class="d-flex align-items-center">
                                    <div class="color-bullet"></div>
                                    <h5 class="font-weight-bold mb-0">16%</h5>
                                    </div>
                                    <p class="mb-">Batterie</p>
                                </div>
                                </div>
                            </div>
                            </div>
                            <canvas height="170" id="status-chart"></canvas>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

@endsection