@extends('layouts.backend')

@section('content')
<style>
    .files .col-md-2 a{
        font-size: 13px;
    }
</style>
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">FTP</div>
                    <div class="panel-body">

                        <div class="form-group col-md-12">
                            <input id="search" class="form-control" placeholder="Recherche" value="" />
                        </div>


                        <br/>
                        <br/>
                        <div class="files row">
                            <div  type="preffix" class="col-md-2 panel text-center">


                                <p>
                                    <a class="text-primary" href="javascript:history.back()">
                                        <img src="/icons/folder.png" width="48" height="48">
                                        <br>
                                        ..
                                    </a>
                                </p>
                            </div>
                                @php($reposetory=array())
                                    @foreach($repertoires as $repertoire )
                                        @if($repertoire['name']!=".")
                                         <div type="folder" class="col-md-2 panel text-center text-warning">
                                                    @php($repe=str_replace('/', '@', $repertoire['dir']))

                                            <p>
                                             <a  href="{{route('sousprojet.repertoire',array('id'=>$underproject->id,'repe'=>$repe))}}">
                                                 <img src="/icons/folder.png" width="48" height="48">
                                                    <br>
                                                 <span>{{$repertoire['name']}}</span>
                                             </a>
                                            </p>
                                         </div>
                                @endif
                            @endforeach
                            @foreach($fichiers as $fichier )
                                @if($fichier!="." && $fichier!=".." )
                            <div type="file"  class="col-md-2 panel text-center">
                                            @php($repe=str_replace('/', '@', $fichier['dir']))
                                             @php($repe=str_replace('/', '@', $fichier['dir']))

                                <p>
                                            <a href="{{route('sousprojet.telecharger',array('id'=>$underproject->id,'file'=>$repe,'fichier'=>$fichier['name']))}}">
                                               <?php
                                               $file = public_path().'/icons/'.strtolower(explode('.',$fichier['name'])[1]).'.png';
                                               $url = is_file($file)?'/icons/'.strtolower(explode('.',$fichier['name'])[1]).'.png':"/icons/file.png";
                                               if(strtolower(explode('.',$fichier['name'])[1]) == "png"){
                                                   $url = route('sousprojet.telecharger',array('id'=>$underproject->id,'file'=>$repe,'fichier'=>$fichier['name']));
                                               }
                                               ?>
                                                
                                                <img src="{{ $url }}" width="48" height="48">
                                                <br>
                                                <span>{{$fichier['name']}}</span>
                                            </a>
                                </p>
                            </div>
                                @endif
                            @endforeach



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
