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
				<h1 class="page-header">Ajouter le Formateur</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
						<form method="POST" action="{{url('formateurs')}}">
						@csrf
						<table>
						<tr>
						<td>
					<div class="form-group">
						<label>Nom</label> 
						 <input type="text" style="width:300px; height:33px ;background:black; color:white" name="nom_form" class="form-control"  placeholder="Saisir le nom" 
						class="form-control" class="@error('nom_form') is-danger @enderror">
						@error('nom_form')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
					</div>
					</div>
					<div class="form-group">
						<label>Prenom</label> 
						 <input type="text" style="width:250px; height:32px ;background:black; color:white" name="prenom_form" class="form-control"  placeholder="Saisir le prenom" 
						class="form-control" class="@error('prenom_form') is-danger @enderror">
						@error('prenom_form')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
					</div>
					</div>
					<div class="form-group">
						<label>niv_etude</label> 
						 <input type="text" style="width:300px; height:32px ;background:black; color:white" name="niv_etude" class="form-control"  placeholder="Saisir le prenom" 
						class="form-control" class="@error('niv_etude') is-danger @enderror">
						@error('niv_etude')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
					</div>
					</td>

                 <td style="width:20%">  </td>
					<td >
					<table>
					<tr>
					<td><right> <caption>
					<div class="form-group">
						 <label> email_form</label> 
						 <input type="text" style="width:300px; height:33px ;background:black; color:white" name="email_form" class="form-control"  placeholder="Saisir le prenom" 
						class="form-control" class="@error('email_form') is-danger @enderror">
						@error('email_form')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<label style="" > tel_form</label> 
						 <input type="number" style="width:300px; height:32px ;background:black; color:white" name="tel_form" class="form-control"  placeholder="Saisir le prenom" 
						class="form-control" class="@error('tel_form') is-danger @enderror">
						@error('tel_form')
						<div class="alert alert-danger">{{$message}}</div>
						@enderror
					</div>
       </td>
	   </tr>
	   </table>

				</td>
			</tr>
              </table>
								<div class="form-group">
									<div class="col-md-5 widget-right">
									<!-- <a href="" button type="submit" class="btn btn-sm btn-default">Save</button> -->
							<button type="submit" class="btn btn-sm btn-info">enregistrer</button>
									</div>
								</div>
					</form>
										
						</div> 
					</div>
				</div>
      
@endsection()
