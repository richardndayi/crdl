@extends('templates.default_layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Typeformations</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> typeformations</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
            <div>
                    <a href="{{url('typeformations/create')}}" type="button" class="btn btn-sm btn-info">New</a>

</div>
					  <div class="col-md-12">

                      
<table class="table" >
<thead>
<tr>


<td>cour_id</td>
<td>salle_id</td>
<td>formateur_id</td>
<td>nomformation</td>
<td>dureeformation</td>
<td>datedebut</td>
<td>datefin</td>


<td>Action</td>

</tr>
</thead>


<tbody>
@foreach($typeformations as $typeformation)
<tr>


<td>{{$typeformation->nom_cours}}</td>
<td>{{$typeformation->nom_salle}}</td>
<td>{{$typeformation->nom_form}}  &nbsp {{$typeformation->prenom_form}}</td>
<td>{{$typeformation->nomformation}}</td>
<td>{{$typeformation->dureeformation}}</td>
<td>{{$typeformation->datedebut}}</td>
<td>{{$typeformation->datefin}}</td>


<td><a href="typeformations/edit/{{$typeformation->id}}" class="btn btn-primary">
 <span class="glyphicon glyphicon-edit">Edit</span></a>
</td>
<td>
<form action="typeformations/destroy/{{$typeformation->id}} "method="POST">
@csrf
<button type="submit" onclick="return confirm('Voulez vous supprimer cette type de formation ?')" class="btn btn-danger">
<span class="glyphicon glyphicon-trash">Delete</span></button>

</form>
</td>
</tr>

@endforeach
</tbody>
</table>
      
@endsection()