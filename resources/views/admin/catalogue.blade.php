@extends('admin.templateDash')
@section('content')
  @if(Session::has('welcomeCatalogue'))

    <div class="alert alert-info alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      {{Session::get('welcomeCatalogue')}} <strong><i class="glyphicon glyphicon-thumbs-up"></i></strong>
    </div>
  @endif
      <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Formulaires pour l'enregistrement d'un nouveau catalogue</h1>
          </header>
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Sérigraphie et Imprimérie</h4>
                </div>
                <div class="card-body">
                  <p>Remplisez correctement le formaulaire ci-dessous</p>
                  <form action="{{route('admin.catalogue.insert')}}" method="post" class="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="statutSerigraphie" checked="true" id="inlineRadio1" value="actif">
                      <label class="form-check-label" for="inlineRadio1">Actif</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="statutSerigraphie" id="inlineRadio2"  value="inactif">
                      <label class="form-check-label" for="inlineRadio2">Inactif</label>
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <textarea type="text" name="descriptionSerigraphie" placeholder="Description" class="form-control"> </textarea>
                    </div>
                    <div class="form-group">       
                        <label>Charger le fichier</label>
                      <input type="file" name="fichierSerigraphie" placeholder="le fichier" class="form-control" required >
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="formulaire" value="Serigraphie" placeholder="le fichier" class="form-control">
                    </div>
                    <div class="form-group">       
                      <input type="submit" value="Signin" class="btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Evenementiel</h4>
                </div>
                <div class="card-body">
                  <p>Merci de bien renseigner les champs</p>
                  <form action="{{route('admin.catalogue.insert')}}" method="post" class="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="statutEvenementiel" id="inlineRadio1" checked="true" value="actif">
                      <label class="form-check-label" for="inlineRadio1">Actif</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="statutEvenementiel" id="inlineRadio2"  value="inactif">
                      <label class="form-check-label" for="inlineRadio2">Inactif</label>
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <textarea type="text" name="descriptionEvenementiel" placeholder="Description" class="form-control"> </textarea>
                    </div>
                    <div class="form-group">
                      <label>Charger le fichier</label>
                      <input type="file" placeholder="le fichier" name="fichierEvenementiel" class="form-control" required>
                      <input type="hidden" name="formulaire" value="Evenementiel" placeholder="le fichier" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Signin" class="btn btn-warning">
                    </div>
                  </form>
                </div>

              </div>


            </div>

          </div> <div class="card left-col">
            <div class="card-header d-flex align-items-center">
              <h4>Boneterie</h4>
            </div><div class="card-body">
              <p>Merci de bien renseigner les champs</p>
              <form action="{{route('admin.catalogue.insert')}}" method="post" class="form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="statutBoneterie" id="inlineRadio1" checked="true" value="actif">
                  <label class="form-check-label" for="inlineRadio1">Actif</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="statutBoneterie" id="inlineRadio2"  value="inactif">
                  <label class="form-check-label" for="inlineRadio2">Inactif</label>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea type="text" name="descriptionBoneterie" placeholder="DescriptionBoneterie" class="form-control"> </textarea>
                </div>
                <div class="form-group">
                  <label>Charger le fichier</label>
                  <input type="file" placeholder="le fichier" name="fichierBoneterie" class="form-control" required>
                  <input type="hidden" name="formulaire" value="Boneterie" placeholder="le fichier" class="form-control" required>
                </div>
                <div class="form-group">
                  <input type="submit" value="Signin" class="btn btn-secondary">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
  <section>
    <div class="container-fluid">
      <!-- Page Header-->
      <header>
        <h1 class="h3 display">Liste des Catalogues Enregistres</h1>
      </header>
      <div class="row">
      </div>
    </div>
  </section>
 @endsection