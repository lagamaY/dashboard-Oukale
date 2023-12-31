@extends('auth.layout.app')

@section('titre')
    Oukalê - Se connecter
@endsection

@section('contenu')
<div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <!-- <div class="brand-logo">
                <img src="assets/images/logo.png" alt="logo">
              </div> -->
              <h4>Connexion au dashbord de oukalê.</h4>
              <br/>
              <form class="pt-3" method="POST" action="{{route('connexion-utilisateur')}}">
              @if(Session::has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{session('fail')}}</div>
                @endif
                @csrf
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="InputEmail1" name="email" placeholder="Email" value="{{old('email')}}">
                  <span class="text-danger">@error('email') {{$message}}@enderror</span>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="InputPassword1" name="password" placeholder="Mot de passe" value="{{old('password')}}">
                  <span class="text-danger">@error('password') {{$message}}@enderror</span>
                </div>
                <div class="mt-3" >
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Se connecter</button>
                </div>
                <!-- <div class="mt-3">
                  <a class="  btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn " href="">Se connecter</a>
                </div> -->
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">

                  </div>
                  <a href="{{route('mot-de-passe-oublie')}}" class="auth-link text-black">Mot de passe oublié ?</a>
                </div>
                <div class="mb-2">

                </div>
                <div class="text-center mt-4 font-weight-light">
                  Vous n'avez pas encore de compte ? <a href="{{route('creer-un-compte')}}" class="text-primary">Créer un compte</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
@endsection
