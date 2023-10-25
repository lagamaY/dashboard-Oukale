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
              
              <h4 class="font-weight-light text-center">Réinitialiser le mot de passe</h4>
              <br/>
              <form class="pt-3">
  
               
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="InputPassword" placeholder="Mot de passe">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="InputPassword" placeholder="Confirmer le mot de passe ">
                </div>
               
                <br/>
                <div class="mt-3 text-center " >
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">Soumettre</a>
                </div>
              
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
@endsection