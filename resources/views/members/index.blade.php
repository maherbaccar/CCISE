@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>            

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Liste Des Membres</h4>
                </div>
                <div class="card-body">
                    <a href="{{url('/members/create')}}" class="btn btn-success btn-sm" title="Ajouter Un Membre">
                        Ajouter un nouveau membre
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class=table>
                            <thead>
                                <tr>
                                <th class="col-1">#</th>
                                <th class="col-2">N°Patente</th>
                                <th class="col-3">Raison Sociale</th>
                                <th class="col-3">Responsable</th>
                                {{-- <th>Fonction</th>
                                <th>Téléphone</th>
                                <th>Fax</th>
                                <th>Email</th>
                                <th>Site Web</th>
                                <th>Adresse</th>
                                <th>Secteur</th>
                                <th>Sous Secteur</th>
                                <th>Pdts</th>
                                <th>N°Carte Adhérent</th>
                                <th>Pack</th>
                                <th>Historique</th>
                                <th>Date d'adhesion</th> --}}
                                <th class="col-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>

                                    <td>{{$item->n_patente}}</td>
                                    <td>{{$item->raison_social}}</td>
                                    <td>{{$item->responsable}}</td>
                                    {{-- <td>{{$item->fonction}}</td>
                                    <td>{{$item->tel}}</td>
                                    <td>{{$item->fax}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->site_web}}</td>
                                    <td>{{$item->adresse}}</td>
                                    <td>{{$item->secteur}}</td>
                                    <td>{{$item->sous_secteur}}</td>
                                    <td>{{$item->pdts}}</td>
                                    <td>{{$item->n_carte_adhérent}}</td>
                                    <td>{{$item->pack}}</td>
                                    <td>{{$item->historique}}</td>
                                    <td>{{$item->created_at}}</td> --}}
                                    <td>
                                    <a href="{{url('/members/'.$item->id)}}"><button type="button" class="btn btn-primary mr-1"><i class="fa fa-eye" aria-hidden="true"></i>Show</button></a>
                                    <a href="{{url('/members/'.$item->id.'/edit')}}"><button type="button" class="btn btn-success mr-3"><i class="fa fa-edit" aria-hidden="true"></i>Edit</button></a>
                                    <form method="POST" action="{{url('/members'.'/'.$item->id)}}" style="display: inline">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger mr-4" onclick="return confirm('Confirm Delete ?')"><i class="fa fa-remove" aria-hidden="true"></i>Delete</button>
                                    </form>
                                    </td>
                                </tr>
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
