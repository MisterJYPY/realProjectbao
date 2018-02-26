@extends('admin.templateDash')
@section('content')
    <style>
        .filterable {
            margin-top: 15px;
        }
        .filterable .panel-heading .pull-right {
            margin-top: -20px;
        }
        .filterable .filters input[disabled] {
            background-color: transparent;
            border: none;
            cursor: auto;
            box-shadow: none;
            padding: 0;
            height: auto;
        }
        .filterable .filters input[disabled]::-webkit-input-placeholder {
            color: #333;
        }
        .filterable .filters input[disabled]::-moz-placeholder {
            color: #333;
        }
        .filterable .filters input[disabled]:-ms-input-placeholder {
            color: #333;
        }

    </style>

    @if(Session::has('SuccesRapport'))

        <div class="alert alert-success">
            {{Session::get('SuccesRapport')}} <strong><i class="glyphicon glyphicon-thumbs-up"></i></strong>
        </div>
    @endif

    @if(Session::has('EchecRapport'))

        <div class="alert alert-warning">

            {{Session::get('EchecRapport')}}<strong> <i class="glyphicon glyphicon-thumbs-down"></i> </strong>

        </div>
    @endif

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
                                <input id="optionsRadios1" type="radio" checked="" value="eleve" name="priorite">
                                <label for="optionsRadios1">Elevé</label>
                            </div>
                            <div>
                                <input id="optionsRadios2" type="radio" checked="true" value="normal" name="priorite">
                                <label for="optionsRadios2">Normal</label>
                            </div>
                            </div>
                        <div class="form-group">
                            <label>Statut</label>
                            <div class="col-sm-10">

                                <div>
                                    <input id="optionsRadios1" type="radio" checked="true" value="actif" name="statut">
                                    <label for="optionsRadios1">Activé</label>
                                </div>
                                <div>
                                    <input id="optionsRadios2" type="radio" value="inactif" name="statut">
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
    <div class="container">
        <div class="row center">
            <h3> La liste complete des articles enregistrés</h3>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:rgb(185,220,255)">
        <div class="x_panel">
            <div class="x_title">
                <div class="clearfix"></div>
            </div>
            <div class="x_content" >
                <table id="datatable-buttons" class="table table-striped table-bordered" >
                    <thead>
                    <tr>
                        <th>Numéro</th>
                        <th>intitule</th>
                        <th>Description</th>
                        <th>lien sur le serveur</th>
                        <th>Date</th>
                        <th>Priorité</th>
                        <th>Statut</th>
                        <th>info</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Numéro</th>
                        <th>intitule</th>
                        <th>Description</th>
                        <th>lien sur le serveur</th>
                        <th>Date</th>
                        <th>Priorité</th>
                        <th>Statut</th>
                        <th>info</th>

                    </tr>
                    </tfoot>
                    <tbody>





                    <?php $i=1; ?>
                    @foreach($liste as $list)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$list->intitule}}</td>
                            <td>{{$list->description}}</td>
                            <td>{{$list->lienImage}}</td>
                            <td>{{$list->created_at}}</td>
                            <td>{{$list->priorite}}</td>
                            <td>{{$list->statut}}</td>
                            <td> <a href="#" class="btn btn-info btn-xs"><i class="fa fa-edit" title="info"></i> </a> </td>

                        </tr>
                    @endforeach



                    </tbody>

                </table>

            </div>
            {{ $liste->links()}}
        </div>
    </div>
    </div>
    <script src="js/jslist1.js" type="text/javascript"></script>
    <script src="js/emailjs.js" type="text/javascript"></script>

@endsection