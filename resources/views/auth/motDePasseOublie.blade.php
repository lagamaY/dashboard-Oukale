@extends('auth.layout.app')

@section('titre')
Oukalê - S'enregistrer
@endsection

@section('contenu')
<div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
<div class="content-wrapper d-flex align-items-center auth px-0">
    <div class="row w-100 mx-0">
    <div class="col-lg-4 mx-auto">
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">

        <h4 class="font-weight-light text-center">Vous avez oublié votre mot de passe !</h4>
        <br />
        <form class="pt-3" method="POST" action="{{route('reset-mot-de-passe-oublie')}}">
        @if(Session::has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        @csrf
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" id="InputUsername" name="email" placeholder="Email">
        </div>

        <br />
        <div class="mt-3 text-center ">
            <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">Réinitialiser le mot de passe</a> -->
            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                type="submit">Réinitialiser le mot de passe</button>
        </div>
        <div class="text-center mt-4 font-weight-light">
            Ou <a href="{{route('connexion')}}" class="text-primary">Se connecter</a>
        </div>
        </form>
    </div>
</div>
</div>
</div>
<!-- content-wrapper ends -->
</div>
@endsection
