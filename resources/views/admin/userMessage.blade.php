@extends('admin.templateDash')
@section('content')

    @if(Session::has('infCurrentMessage'))

        <div class="alert alert-warning alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{Session::get('infCurrentMessage')}} <strong><i class="glyphicon glyphicon-thumbs-up"></i></strong>
        </div>
    @endif

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Votre Message ici</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="panel panel-default">
                                <div class="panel-heading"></div>
                                <div class="panel-body"><strong style="color:darkslategray">{{$infCurrentMessage[0]['description']}}</strong></div>

                            </div>

                        </div>

                    </div>
                    <div class="card-footer">Statut du message : <strong style="color:maroon">Message Lu</strong></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4> <strong>Informations de l'expediteur</strong> </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Nom et Prenoms : <strong style="color:maroon">{{$infCurrentMessage[0]['nom']}} </strong> </th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Mail : <strong style="color:maroon">{{$infCurrentMessage[0]['intitule']}} </strong> </th>

                                </tr>
                                <tr>
                                    <th scope="row">Date d'envoi : <strong style="color:maroon">{{$infCurrentMessage[0]['created_at']}} </strong>  </th>

                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Tous les messages lu</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom </th>
                                    <th>Mail</th>
                                    <th>message</th>
                                    <th>send</th>
                                    <th>read</th>
                                    <th>delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>
                                @foreach($allReadPost as $currentReadmessage)
                                <tr>
                                    <th scope="row">{{$i}}</th>
                                    <td>{{$currentReadmessage['nom']}}</td>
                                    <td>{{$currentReadmessage['intitule']}}</td>
                                    <td> <strong style="color:#0069d9">{{(strlen($currentReadmessage['description'])<8)?$currentReadmessage['description']:substr($currentReadmessage['description'],0,5)."..."}}</strong></td>
                                    <td>{{$currentReadmessage['created_at']}}</td>
                                    <td>{{$currentReadmessage['updated_at']}}</td>
                                    <td><a href="#" class="alert-danger">Del</a></td>
                                </tr>
                                <?php $i++; ?>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{$allReadPost ->links()}}
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Tous vos messages Non encore lu </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Mail</th>
                                    <th>message</th>
                                    <th>send</th>
                                    <th>read here</th>
                                    <th>delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $j=1; $cpt=0;?>
                                @foreach($allNewpost as $currentMessageNotRead)
                                    <tr>
                                        <th scope="row">{{$j}}</th>
                                        <td>{{$currentMessageNotRead['nom']}}</td>
                                        <td>{{$currentMessageNotRead['intitule']}}</td>
                                        <td> <strong style="color:#0069d9">{{(strlen($currentMessageNotRead['description'])<8)?$currentMessageNotRead['description']:substr($currentMessageNotRead['description'],0,5)."..."}}</strong></td>
                                        <td>{{$currentMessageNotRead['created_at']}}</td>
                                        <td><a href="{{route('viewMessage',$currentMessageNotRead['id'])}}" >Here</a></td>
                                        <td><a href="{{route('delMessage',$currentMessageNotRead['id'])}}" class="alert-danger">Del</a></td>

                                    </tr>
                                    <?php $j++;?>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                    {{ $allNewpost ->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection