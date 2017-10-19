@extends('layouts.backend')

@section('content')
    <div >
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Partage</div>
                    <div class="panel-body">



                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Fichiers</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php($reposetory=array())
                                    @foreach($repertoires as $repertoire )
                                        @if($repertoire['name']!=".")
                                            <tr class="odd gradeX">
                                                <td class="center">

                                                    @php($repe=str_replace('\\', '@', $repertoire['dir']))
                                                        <a href="{{route('sousprojet.repertoire',array('id'=>$underproject->id,'repe'=>$repe))}}"><i class="icon-folder-open"> {{$repertoire['name']}}</i></a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    @foreach($fichiers as $fichier )
                                        @php($repe=str_replace('\\', '@', $fichier['dir']))
                                            @if($fichier['name']!="." && $fichier['name']!=".." )
                                                <tr class="odd gradeX">
                                                    <td class="center">
                                                        <a href="{{route('sousprojet.telecharger',array('id'=>$underproject->id,'file'=>$repe,'fichier'=>$fichier['name']))}}">{{$fichier['name']}}</a>
                                                    </td>
                                                </tr>
                                            @endif
                                            @endforeach

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
