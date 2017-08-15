@extends('layouts.main')

@section('content')

	@include('includes.messages')
	@include('includes.errors')

	{{ addtexto("Añadir servicio") }}

	@include('form_fields.create')
    
	 <br> <br> <br> <br> <br> <br> 
	  <br> <br> <br> <br> <br> <br> <br>

@endsection

@section('js')
    @parent   
	  <script type="text/javascript" src="{{ asset('assets/js/areyousure.js') }}"></script>
	  <script type="text/javascript" src="{{ asset('assets/js/guarda.js') }}"></script>
@endsection