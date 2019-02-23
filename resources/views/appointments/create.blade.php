@extends('layouts.main')

@section('content')

	@include('includes.patients_nav')

	@include('includes.messages')
	@include('includes.errors')

	{!! addText("Añadir Cita") !!}

    <div class="col-sm-12 pad10">
        @include('form_fields.show.name')
    </div>

	@include('form_fields.fields.opendiv')
		@include('form_fields.fields.openform')

			<input type="hidden" name="idpat" value="{{ $id }}">

			@include('form_fields.common_alternative')

		@include('form_fields.fields.closeform')
	@include('form_fields.fields.closediv')

@endsection

@section('footer_script')

	<script>
		$(document).ready(function() {
			$('input[name="day"]').attr('value', util.getTodayDate());
			$('input[name="hour"]').attr('value', '12:00');
		});
	</script>

@endsection

@section('js')
    @parent

	<script type="text/javascript" src="{{ asset('assets/js/modernizr.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/minified/polyfiller.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/minified/shims/i18n/formcfg-es.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/webshims.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/areyousure.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/forgetChanges.js') }}"></script>
@endsection