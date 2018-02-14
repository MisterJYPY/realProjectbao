@extends('admin.templateDash')
@section('content')
    @if(Session::has('SuccesVideo'))

        <div class="alert alert-success">
            {{Session::get('SuccesVideo')}} <strong><i class="glyphicon glyphicon-thumbs-up"></i></strong>
        </div>
    @endif

    @if(Session::has('EchecVideo'))

        <div class="alert alert-warning">

            {{Session::get('EchecRapport')}}<strong> <i class="glyphicon glyphicon-thumbs-down"></i> </strong>

        </div>
    @endif
    @if(Session::has('infoAllVideo'))

        <div class="alert alert-info alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{Session::get('infoAllVideo')}} <strong><i class="glyphicon glyphicon-thumbs-up"></i></strong>
        </div>
    @endif
    <div class="container-fluid">
        <form id="articlesForm" method="post" class="form"  action="{{route('admin.videoRegister')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row" >
                <div class="col-md-6 ">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Enregistré une nouvelle video</h4>
                        </div>
                        <div class="card-body">
                            <p>Ici vous controller la video qui s'affiche sur le site</p>
                            <div class="form-group">
                                <label>intulé de la video</label>
                                <input type="text" placeholder="Intitule de l'article" name="intitule" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" placeholder="Description" name="description" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Videos (de petite taille type mp4)</label>
                                <input type="file" placeholder="choose file" name="imageMoyenne" class="form-control" multiple>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Un petit parametrage sur votre video</h4>
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
                                            <input id="optionsRadios2" type="radio" value="option2" name="inactif">
                                            <label for="optionsRadios2">Désactivité</label>
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
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 style="color: maroon">Toutes vos videos <mark>({{count($Allvideos)}})</mark></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>intitulé</th>
                            <th>description</th>
                            <th>statut</th>
                            <th>priorite</th>
                            <th>lien</th>
                            <th>st_action</th>
                            <th>pr_action</th>
                            <th>date</th>
                            <th>delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $j=1; $cpt=0;?>
                        @foreach($Allvideos as $currentMessageNotRead)
                            <tr>
                                <th scope="row">{{$j}}</th>
                                <td>{{$currentMessageNotRead['intitule']}}</td>
                                <td>{{$currentMessageNotRead['description']}}</td>
                                <td> {{$currentMessageNotRead['statut']}}</td>
                                <td> {{$currentMessageNotRead['priorite']}}</td>
                                <td> {{$currentMessageNotRead['lien']}}</td>
                                <td class="alert-danger">{{($currentMessageNotRead['statut']=='actif')?'desactivé':'activé'}}</td>
                                <td class="alert-warning">{{($currentMessageNotRead['priorite']=='normal')?'eleve':'normal'}}</td>
                                <td>{{$currentMessageNotRead['created_at']}}</td>
                                <td><a href="{{route('videoModif.html',$currentMessageNotRead['id'])}}" >delete</a></td>


                            </tr>
                            <?php $j++;?>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            {{ $Allvideos ->links()}}
        </div>
    </div>
    </div>
    </div>
@endsection