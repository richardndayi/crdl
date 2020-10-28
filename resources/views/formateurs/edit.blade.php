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
				<h1 class="page-header">Editer les formateurs</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
						<form role="form-" action="/formateurs/{{$formateur->id}}" method="POST">
						@csrf
                        @method('PUT')
                <table>
				<tr>
				<td>

					<div class="form-group">
					<label>Nom</label> 
									
					<input type="text" style="width:300px; height:33px ;background:black; color:white" name="nom_form" class="form-control" placeholder="" value="{{$formateur->nom_form}}">
									
					</div>
					<div class="form-group">
					<label >Prenom</label> 
									
					<input type="text" style="width:250px; height:33px ;background:black; color:white" name="prenom_form" class="form-control" placeholder="" value="{{$formateur->prenom_form}}">
									
					</div>

                    <div class="form-group">
					<label > niv_etude</label> 
									
					<input type="text" style="width:300px; height:33px ;background:black; color:white" name="niv_etude" class="form-control" placeholder="" value="{{$formateur->niv_etude}}">
									
					</div>
                  </td>
                 <td style="width:20%"> </td>
				 <td>

					<div class="form-group">
					<label >email_form</label> 
									
					<input type="text" style="width:300px; height:33px ;background:black; color:white" name="email_form" class="form-control" placeholder="" value="{{$formateur->email_form}}">
									
					</div>
					<div class="form-group">
					<label >tel_form</label> 
									
					<input type="text"style="width:300px; height:33px ;background:black; color:white" name="tel_form" class="form-control" placeholder="" value="{{$formateur->tel_form}}">
									
					</div>
                    </td>
					</tr>
                    </table>
								<div class="form-group">
									<div class="col-md-5 widget-right">
									<!-- <button type="submit" class="btn btn-sm btn-default">Save</button> -->
							<button type="submit" class="btn btn-sm btn-info">enregistrer</button>
									</div>
								</div>
					</form>
										
						</div> 
					</div>
				</div>
      
@endsection
