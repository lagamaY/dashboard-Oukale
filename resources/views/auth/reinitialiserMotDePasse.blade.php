@extends('auth.layout.app')

@section('titre')
Oukalê - S'enregistrer
@endsection

@section('contenu')
<div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
<div class="content-wrapper d-flex align-items-center auth px-0">
    <div class="row w-100 mx-0"> <div class="col-lg-4 mx-auto"> <div class="auth-form-light text-left py-5 px-4
        px-sm-5">

        <h4 class="font-weight-light text-center">Réinitialiser le mot de passe</h4>
        <br />
        <form class="pt-3" method="POST" action="{{route('reinitialiser-mot-de-passe')}}">
            @if(Session::has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{session('fail')}}</div>
            @endif
            @csrf


            <div class="form-group">
            <input type="password" class="form-control form-control-lg" id="InputPassword" name="password"
            placeholder="Mot de passe">
            <span class="text-danger">@error('password') {{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-lg" id="InputPassword"
                    name="password_confirmation" placeholder="Confirmer le mot de passe ">
            </div>

            <br />
            <div class="mt-3 text-center ">
                <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">Soumettre</a> -->
                <button type="submit"
                    class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Soumettre</button>
            </div>

        </form>
    </div>
</div>
</div>
</div>
<!-- content-wrapper ends -->
</div>
@endsection
