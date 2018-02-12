@extends('admin.templateDash')
@section('content')
<div class="container-fluid">
    <form id="articlesForm" method="post" class="form"  action="{{route('productRegister')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
<div class="row" >
    <div class="col-md-6 ">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h4>Enregistrer un nouvel article</h4>
            </div>
            <div class="card-body">
                <p>Ceci permettra de dynamiser les affichages sur le site</p>
                    <div class="form-group">
                        <label>intulé de l'article</label>
                        <input type="text" placeholder="Intitule de l'article" name="intitule" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" placeholder="Description" name="description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image Moyenne </label>
                        <input type="file" placeholder="Password" name="imageMoyenne" class="form-control" multiple>
                    </div>
                    <div class="form-group">
                        <label>Services:</label>
                        <select class="selectpicker" name="services">
                            @foreach($categories as $service)
                            <option title="Combo 1" value="{{$service->id}}">{{$service->intitule}}</option>
                             @endforeach
                    </select>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h4>Un petit parametrage sur ce article</h4>
            </div>
            <div class="card-body">
                <p>Vous regler les options d'affichages sur le site</p>

                    <div class="form-group">
                        <label>Niveau de priorité d'affichage</label>
                        <div class="col-sm-10">

                            <div>
                                <input id="optionsRadios1" type="radio" checked="" value="option1" name="priorite">
                                <label for="optionsRadios1">Elevé</label>
                            </div>
                            <div>
                                <input id="optionsRadios2" type="radio" checked="true" value="option2" name="priorite">
                                <label for="optionsRadios2">Normal</label>
                            </div>
                    </div>
                        <div class="form-group">
                            <label>Statut</label>
                            <div class="col-sm-10">

                                <div>
                                    <input id="optionsRadios1" type="radio" checked="true" value="option1" name="statut">
                                    <label for="optionsRadios1">Activé</label>
                                </div>
                                <div>
                                    <input id="optionsRadios2" type="radio" value="option2" name="statut">
                                    <label for="optionsRadios2">Désactivité</label>
                                </div>
                            </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label>Image Minime de l'article</label>
                            <input type="file" placeholder="Password" name="imagePetite" class="form-control" multiple>
                        </div>
                    </div>
                    </div>

            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="Signin" class="btn btn-primary">
    </div>
    </form>
</div>
</div>
</div>
@endsection