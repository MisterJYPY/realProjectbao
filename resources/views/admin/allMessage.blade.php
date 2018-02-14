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

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header center">
                        <h4  style="color: maroon">Tous les messages lu <mark>({{count($allReadPost)}})</mark></h4>
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
                                        <td> <a href="{{route('viewMessage',$currentReadmessage['id'])}}" ><strong style="color:#0069d9">{{(strlen($currentReadmessage['description'])<8)?$currentReadmessage['description']:substr($currentReadmessage['description'],0,5)."..."}}</strong></a></td>
                                        <td>{{$currentReadmessage['created_at']}}</td>
                                        <td>{{$currentReadmessage['updated_at']}}</td>
                                        <td><a href="{{route('delMessage',$currentReadmessage['id'])}}" class="alert-danger">Del</a></td>
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 style="color: maroon">Tous vos messages Non encore lu <mark>({{count($allNewpost)}})</mark></h4>
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 style="color:blue">Tous vos messages archivés <mark>({{count($allBackMessage)}})</mark></h4>
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
                                @foreach($allBackMessage as $currentMessageNotRead)
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
                    {{$allBackMessage->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection