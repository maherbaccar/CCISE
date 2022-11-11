@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>            
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card" style="margin:20px;">
    <div class="card-header">Crée un nouveau membre</div>
    <div class="card-body">
        <form action="{{url('members/'.$members->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <label>N°Patente</label><br/>
            <input type="number" value="{{$members->n_patente}}" name="n_patente" id="n_patente" class="form-control"><br/>
            <label>Raison Sociale</label><br/>
            <input type="text" value="{{$members->raison_social}}" name="raison_social" id="raison_social" class="form-control"><br/>
            <label>Responsable</label><br/>
            <input type="text"value="{{$members->responsable}}" name="responsable" id="responsable" class="form-control"><br/>
            <label>Fonction</label><br/>
            <select name="fonction" id="fonction" class="col-12">
                <option value="PDG">PDG</option>
                <option value="Gérant">Gérant</option>
                <option value="Propriétaire">Propriétaire</option>
              </select><br/>
            <label>Téléphone</label><br/>
            <input type="tel" name="tel" id="tel" class="form-control"value="{{$members->tel}}" ><br/>
            <label>Fax</label><br/>
            <input type="tel" name="fax" id="fax" class="form-control"value="{{$members->fax}}"><br/>
            <label>Email</label><br/>
            <input type="email" name="email" id="email" class="form-control"value="{{$members->email}}"><br/>
            <label>Site Web</label><br/>
            <input type="url" name="site_web" id="site_web" class="form-control"value="{{$members->site_web}}"><br/>
            <label>Adresse</label><br/>
            <input type="text" name="adresse" id="adresse" class="form-control"value="{{$members->adresse}}"><br/>
            <label>Secteur</label><br/>
            <input type="text" name="secteur" id="secteur" class="form-control"value="{{$members->secteur}}"><br/>
            <label>Sous Secteur</label><br/>
            <input type="text" name="sous_secteur" id="sous_secteur" class="form-control"value="{{$members->sous_secteur}}"><br/>
            <label>Produits</label><br/>
            <input type="text" name="pdts" id="pdts" class="form-control"value="{{$members->pdts}}"><br/>
            <label>N°Carte Adhérent</label><br/>
            <input type="number" name="n_carte_adhérent" id="n_carte_adhérent" class="form-control"value="{{$members->n_carte_adhérent}}"><br/>
            <label>Pack</label><br/>
            <select name="pack" id="pack" class="col-12">
                <option value="Silver">Silver</option>
                <option value="Gold">Gold</option>
                <option value="Diamond">Diamond</option>
              </select><br/>
              <label>Logo</label><br/>
              <input class="form-control" name="photo" type="file" id="photo"></br>
  
            <div style="margin-left: 88%">
            <input type="submit" value="Modifier" class="btn btn-success ">
            <input type="reset" value="Annuler" class="btn btn-danger"><br/>
            </div>

        </form>
    </div>
</div>

@endsection
