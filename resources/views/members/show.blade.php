@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>            

<div class="card" style="margin:20px;">
    <div class="card-header">Member Page</div>
    <div class="card-body">
        
        <img src="{{ url('storage/images/'.$members->photo) }}" alt="" title="" style=" max-width: 200px;min-width:200px;max-height: 200px;min-height:200px"/>

        <h3>Raison Sociale : {{$members->raison_social}}</h3>
        <h6>N° Patente : {{$members->n_patente}}</h6>
        <h6>Responsable : {{$members->responsable}}</h6>
        <h6>Fonction : {{$members->fonction}}</h6>
        <h6>Téléphone : {{$members->tel}}</h6>
        <h6>Fax : {{$members->fax}}</h6>
        <h6>Email : {{$members->email}}</h6>
        <h6>Site Web : {{$members->site_web}}</h6>
        <h6>Adresse : {{$members->adresse}}</h6>
        <h6>Secteur : {{$members->secteur}}</h6>
        <h6>Sous Secteur : {{$members->sous_secteur}}</h6>
        <h6>Produits : {{$members->pdts}}</h6>
        <h6>N° Cate D'adhérent : {{$members->n_carte_adhérent}}</h6>
        <h6>Pack : {{$members->pack}}</h6>
        <h6>Date d'adhesion : {{$members->created_at->format('d-m-Y')}}</h6>
    </div>
</div>
@endsection