@extends('templates.default_layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dureeformations</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> Dureeformations</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
            <div>
                    <a href="{{url('dureeformations/create')}}" type="button" class="btn btn-sm btn-info">New</a>

</div>
					  <div class="col-md-12">

                      
<table class="table">
<thead>
<tr>
<td>ID</td>
<td> cour_id</td>
<td>salle_id</td>
<td>formateur_id</td>
<td>dureeformation</td>
<td>datedebut</td>
<td>datefin</td>
<td>prix</td>

<td>Action</td>

</tr>
</thead>


<tbody>
@foreach($dureeformations as $dureeformation)
<tr>
<td>{{$dureeformation->id}}</td>
<td>{{$dureeformation->cour_id}}</td>
<td>{{$dureeformation->salle_id}}</td>
<td>{{$dureeformation->formateur_id}}</td>
<td>{{$dureeformation->dureeformation}}</td>
<td>{{$dureeformation->datedebut}}</td>
<td>{{$dureeformation->datefin}}</td>
<td>{{$dureeformation->prix}}</td>

<td><a href="cours/edit/{{$cour->id}}" class="btn btn-primary">
                    <span class="glyphicon glyphicon-edit">modifier</span></a>
				
<button type="submit" onclick="return confirm('Voulez vous supprimer cette facture ?')" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash">supprimer</span></button>
<!-- <button type="submit" value="" class="btn btn-sm btn-danger">Delete</button> ->


<td> <a href="dureeformations/edit/{{$dureeformation->id}}" type="button" class="btn btn-sm btn-info">Edit</a>
<form action="dureeformations/destroy/{{$dureeformation->id}}" method="POST">
@csrf
<button type="submit" value="" class="btn btn-sm btn-default">Delete</button> -->
</form>
</td>
</tr>

@endforeach
</tbody>
</table>
      
@endsection()