@extends('layouts.main')

@include('includes.other')

@section('content')

@include('includes.empnav')

@include('includes.messages')
@include('includes.errors')

<?php
 addtexto("Editar Datos");
?>

<div class="row">
 <div class="col-sm-12">
  <form class="form" id="form" role="form" action="{{url("/Empresa/1")}}" method="post">
	{!! csrf_field() !!}
	<input type="hidden" name="_method" value="put">
		
<div class="form-group col-sm-3">  <label class="control-label text-left mar10">Nombre:</label>
<input type="text" class="form-control" name="nom" value="{{$empre->nom}}" required >  </div>
		
<div class="form-group col-sm-3">  <label class="control-label text-left mar10">Poblaci&#xF3;n:</label>
<input type="text" class="form-control" name="pobla" value="{{$empre->pobla}}" >  </div>  
		  
<div class="form-group col-sm-3">  <label class="control-label text-left mar10">Direcci&#xF3;n:</label>
<input type="text" class="form-control" name="direc" value="{{$empre->direc}}" >  	</div>
		
<div class="form-group col-sm-2">  <label class="control-label text-left mar10">NIF:</label>
<input type="text" class="form-control" name="nif" value="{{$empre->nif}}" >  </div>
			
<div class="form-group col-sm-2">    <label class="control-label text-left mar10">Tel&#xE9;fono:</label>
<input type="text" class="form-control" name="tel1" value="{{$empre->tel1}}" > 	</div>
		
<div class="form-group col-sm-2">     <label class="control-label text-left mar10">Tel&#xE9;fono:</label>
<input type="text" class="form-control" name="tel2" value="{{$empre->tel2}}" > 	</div>
		
<div class="form-group col-sm-2">    <label class="control-label text-left mar10">Tel&#xE9;fono:</label>
<input type="text" class="form-control" name="tel3" value="{{$empre->tel3}}" > 	</div>
				
<div class="form-group col-sm-11">      <label class="control-label text-left mar10">Notas:</label>
<textarea class="form-control" name="notas" rows="4"> {{$empre->notas}} </textarea> 	</div> 	<br>

<div class="form-group col-sm-11">      <label class="control-label text-left mar10">Texto de presupuestos: </label>
<textarea class="form-control" name="presutex" rows="4"> {{$empre->presutex}} </textarea> 	</div> 	<br>
		
<div class="form-group">  <div class="col-sm-4 text-left">
<button type="submit" class="text-left btn btn-primary btn-md">Guardar <i class="fa fa-chevron-circle-right"></i> </button>
</div> </div> </form>  </div> </div>

@endsection
	 
@section('js')
    @parent
    
	  <script type="text/javascript" src="{{ URL::asset('assets/js/modernizr.js') }}"></script>
	  <script type="text/javascript" src="{{ URL::asset('assets/js/minified/polyfiller.js') }}"></script>
	  <script type="text/javascript" src="{{ URL::asset('assets/js/main.js') }}"></script>
	  <script type="text/javascript" src="{{ URL::asset('assets/js/areyousure.js') }}"></script>
	  <script type="text/javascript" src="{{ URL::asset('assets/js/guarda.js') }}"></script>
	 	  
@endsection