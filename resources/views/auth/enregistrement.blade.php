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

        <h4 class="font-weight-light text-center">Accéder au dashbord de Oukalê !</h4>
        <br />
        <form class="pt-3" action="{{route('enregistrement-utilisateur')}}" method="POST">
        @if(Session::has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{session('fail')}}</div>
        @endif
        @csrf

        <div class="form-group">
        <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Nom & prénoms"
        value="{{old('name')}}">
        <span class="text-danger">@error('name') {{$message}}@enderror</span>
        </div>
        <div class="form-group">
        <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email"
            value="{{old('email')}}">
        <span class="text-danger">@error('email') {{$message}}@enderror</span>
        </div>

        <div class="form-group">
        <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Mot de passe" value="{{old('password')}}">
        <span class="text-danger">@error('password') {{$message}}@enderror</span>
        </div>
        <div class="form-group">
        <input type="password" class="form-control form-control-lg" id="password_conf" name="password_confirmation"
            placeholder="Confirmer le mot de passe">
        <!-- <span class="text-danger">@error('password_confirmation') {{$message}}@enderror</span> -->
        </div>


        <br/>
        <div class="mt-3 text-center ">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium
            auth-form-btn">S'inscrire</button>
            </div>
            <!-- <div class="mt-3 text-center " >
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">S'inscrire</a>
                </div> -->
                <div class="text-center mt-4 font-weight-light">
                Vous avez déjà un compte ?  <a href="{{route('connexion')}}" class="text-primary">Se connecter</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
@endsection
