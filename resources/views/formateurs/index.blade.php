@extends('templates.default_layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Formateurs</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Listes des Formateurs</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
            <div>
                    <a href="{{url('formateurs/create')}}" type="button" class="btn btn-sm btn-info">New</a>

</div>
					  <div class="col-md-12">

                      
<table class="table">
<thead>
<tr>
<td>ID</td>
<td>Nom formateur</td>
<td>prenom formateur</td>
<td>Niveau etude</td>
<td> email form</td>
<td> tel form</td>

<td>Action</td>

</tr>
</thead>


<tbody>
@foreach($formateurs as $formateur)
<tr>
<td>{{$formateur->id}}</td>
<td>{{$formateur->nom_form}}</td>
<td>{{$formateur->prenom_form}}</td>
<td>{{$formateur->niv_etude}}</td>
<td>{{$formateur->email_form}}</td>
<td>{{$formateur->tel_form}}</td>


<td><a href="formateurs/edit/{{$formateur->id}}" class="btn btn-primary">
 <span class="glyphicon glyphicon-edit">Edit</span></a>
</td>
<td>
<form action="formateurs/destroy/{{$formateur->id}} "method="POST">
@csrf
<button type="submit" onclick="return confirm('Voulez vous supprimer cet formateur ?')" class="btn btn-danger">
<span class="glyphicon glyphicon-trash">Delete</span></button>


<!-- <button type="submit" value="" class="btn btn-sm btn-danger">Delete</button> ->



<td> <a href="formateurs/edit/{{$formateur->id}}" type="button" class="btn btn-sm btn-info">Edit</a>
<form action="formateurs/destroy/{{$formateur->id}}" method="POST">
@csrf
<button type="submit" value="" class="btn btn-sm btn-default">Delete</button> -->
</form>
</td>
</tr>

@endforeach
</tbody>
</table>
      
@endsection()