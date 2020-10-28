@extends('templates.default_layout')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Adresses</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ajouter l' adresses</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<!-- <div class="panel-heading">Buttons</div> -->
					<div class="panel-body">
						<form  action="{{url('adresses')}}" method="POST">
						@csrf
                        <table>
                        <tr>
                        <td>

						<div class="form-group">
                                <label for="nom_inscrit">inscrit</label>
                                <select name="id_apprenant" id="" style="width:300px; height:33px ;background:black; color:white" class="form-control"
                                class ="@error('nom_inscrit') is-danger @enderror">
                                <option value="">Select apprenant </option>
                                @foreach($inscrits as $inscrit )
                                <option value="{{$inscrit->id}}">{{$inscrit->nom_inscrit}}</option>
                                @endforeach
                                @error('inscrit->id')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                </select>
                            </div>
                            
						
                            
                            <div class="form-group">
                            <labe for=""> province</label>
                            <input type="text" name="province" id="" style="width:300px; height:33px ;background:black; color:white" class="form-control"
                            class="@error('province') is-danger @enderror" placeholder="" aria-describedby="helpId">
                            @error('province')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>

                            <div class="form-group">
                            <labe for="">commune</label>
                            <input type="text" name="commune" id="" style="width:300px; height:33px ;background:black; color:white" class="form-control"
                            class="@error('commune') is-danger @enderror" placeholder="" aria-describedby="helpId">
                            @error('commune')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>

                            <div class="form-group">
                            <labe for=""> Zone </label>
                            <input type="text" name="zone" id="" style="width:300px; height:33px ;background:black; color:white" class="form-control"
                            class="@error('zone') is-danger @enderror" placeholder="" aria-describedby="helpId">
                            @error('zone')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>
                            </td>
                            <td style="width:20%">  </td>
                            <td>

                            <div class="form-group">
                            <labe for=""> Quartier</label>
                            <input type="text" name="quartier" id="" style="width:300px; height:33px ;background:black; color:white" class="form-control"
                            class="@error('quartier') is-danger @enderror" placeholder="" >
                            @error('quartier')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>
                            <div class="form-group">
                            <labe for=""> Rue</label>
                            <input type="text" name="rue" id="" style="width:300px; height:33px ;background:black; color:white" class="form-control"
                            class="@error('rue') is-danger @enderror" placeholder="" >
                            @error('rue')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>
                            <div class="form-group">
                            <labe for=""> Num maison</label>
                            <input type="text" name="maison" id="" style="width:300px; height:33px ;background:black; color:white" class="form-control"
                            class="@error('maison') is-danger @enderror" placeholder="" >
                            @error('maison')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            </div>
                           
                           </td>
                           </tr>
                           </table>

								<div class="form-group">
									<div class="col-md-5 widget-right">
									<!-- <a href="" button type="submit" class="btn btn-sm btn-default">Save</button> -->
							<button type="submit" class="btn btn-sm btn-success">enregistrer</button>
									</div>
								</div>
					</form>
										
						</div> 
					</div>
				</div>
      
@endsection()
