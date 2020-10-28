@extends('templates.default_layout')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Salles</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> le nom du salle</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
						<form method="POST" action="{{url('salles')}}">
						@csrf
						
				    <table>
					<tr>
					<td>
					<div class="form-group">
						<label>Nom salle</label> 
						 <input type="text" style="width:300px; height:33px ;background:black; color:white" name="nom_salle" class="form-control"  placeholder="Saisir le nom" 
						class="form-control" class="@error('nom_salle') is-danger @enderror">
						@error('nom_salle')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
					</div>
					
					</div>
					<div class="form-group">
						<label> nb_place</label> 
						 <input type="text" style="width:300px; height:33px ;background:black; color:white" name="nb_place" class="form-control"  placeholder="Saisir le nb_place" 
						class="form-control" class="@error('nb_place') is-danger @enderror">
						@error('nb_place')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
					</div> 
					
					</div>
					</td>
					</tr>
					</table>


								<div class="form-group">
									<div class="col-md-5 widget-right">
									<!-- <a href="" button type="submit" class="btn btn-sm btn-default">Save</button> -->
							<button type="submit" class="btn btn-sm btn-primary">enregistrer</button>
									</div>
								</div>
					</form> -->
										
						</div> 
					</div>
				</div>
      
@endsection()
