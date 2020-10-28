@extends('templates.default_layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Certificats</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> listes des Certificats</h1>
			</div>
		</div><!--/.row-->
				
		
     <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
            <div>
        <a href="{{url('certificats/create')}}" type="button" class="btn btn-sm btn-info">New</a>

    </div>
<div class="col-md-12">

                      
<table class="table">
<thead>
<tr>
<td>ID</td>
<td>nom_inscrit</td>
<td>nom_certificat</td>
<td>date_sortie</td>


<td>Action</td>

</tr>
</thead>


<tbody>
@foreach($certificats as $certificat)
<tr>
<td>{{$certificat->id}}</td>
<td>{{$certificat->id_inscrit}}</td>
<td>{{$certificat->nom_certificat}}</td>

<td>{{$certificat->date_sortie}}</td>



<td><a href="certificats/edit/{{$certificat->id}}" class="btn btn-primary">
                    <span class="glyphicon glyphicon-edit">modifier</span></a>
				
<button type="submit" onclick="return confirm('Voulez vous supprimer cette certificat ?')" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash">supprimer</span></button>



</form> 



</td> 
</tr>
@endforeach 
</tbody>
</table>
@endsection     