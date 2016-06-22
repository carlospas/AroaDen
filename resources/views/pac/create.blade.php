@extends('layouts.main')

@section('content')

@include('includes.messages')
@include('includes.errors')


{!! addtexto("Añadir Paciente") !!}


<div class="row">
	<div class="col-sm-12">
		<form role="form" id="form" class="form" action="{!! url('/Pacientes') !!}" method="post">
			{!! csrf_field() !!}
		 
			 <div class="form-group col-sm-4">   <label class="control-label text-left mar10">Apellidos:</label>
				<input type="text" class="form-control" name="apepac" maxlength="111" value="{{ old('apepac') }}" autofocus required > 
			 </div>
					
			 <div class="form-group col-sm-3">   <label class="control-label text-left mar10">Nombre:</label>
				<input type="text" class="form-control" name="nompac" maxlength="111" value="{{ old('nompac') }}" required >
			 </div>
					
			 <div class="form-group col-sm-5">   <label class="control-label text-left mar10">Poblaci&#xF3;n:</label>
				<input type="text" class="form-control" name="pobla" maxlength="111" value="{{ old('pobla') }}"> 		</div>  
					  
			 <div class="form-group col-sm-5">   <label class="control-label text-left mar10">Direcci&#xF3;n:</label>
				<input type="text" class="form-control" name="direc" maxlength="111" value="{{ old('direc') }}"> 		</div>
					
			 <div class="form-group col-sm-2"> 	 <label class="control-label text-left mar10">DNI:</label>
				<input type="text" class="form-control" name="dni" pattern="[A-Z0-9]{9}" maxlength="9" value="{{ old('dni') }}" required> 		</div>
						
			<div class="form-group col-sm-2">
			  <label class="control-label text-left mar10">Sexo:</label>
			 	<select name="sexo" class="form-control" required>
			 		<option value="hombre" selected> hombre </option>
			  		<option value="mujer"> mujer </option> 
			   </select>
			</div>		
			
			<div class="form-group col-sm-2">     <label class="control-label text-left mar10">Tel&#xE9;fono1:</label>
			  <input type="text" class="form-control" name="tel1" maxlength="11" value="{{ old('tel1') }}"> 	</div>
			
			<div class="form-group col-sm-2">     <label class="control-label text-left mar10">Tel&#xE9;fono2:</label>
			  <input type="text" class="form-control" name="tel2" maxlength="11" value="{{ old('tel2') }}"> 	</div>
			
			<div class="form-group col-sm-2">      <label class="control-label text-left mar10">Tel&#xE9;fono3:</label>
			  <input type="text" class="form-control" name="tel3" maxlength="11" value="{{ old('tel3') }}">  </div>
			
			<div class="form-group col-sm-4"> 	 <label class="control-label text-left mar10">F. nacimiento:</label>		 	
	  				<input type="date" name="fenac" value="1970-01-01" > </div>
			
			<div class="form-group col-sm-11">    <label class="control-label text-left mar10">Notas:</label>
			      <textarea class="form-control" name="notas" rows="4"> {{ old('notas') }} </textarea> 		</div>
		

			@include('includes.subuto')
    
</form> </div> </div>

@endsection

@section('js')
    @parent   
	  <script type="text/javascript" src="{!! asset('assets/js/modernizr.js') !!}"></script>
	  <script type="text/javascript" src="{!! asset('assets/js/minified/polyfiller.js') !!}"></script>
	  <script type="text/javascript" src="{!! asset('assets/js/main.js') !!}"></script>
	  <script type="text/javascript" src="{!! asset('assets/js/areyousure.js') !!}"></script>
	  <script type="text/javascript" src="{!! asset('assets/js/guarda.js') !!}"></script>
@endsection