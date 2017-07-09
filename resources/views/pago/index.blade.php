@extends('layouts.main')

@section('content')

@include('includes.contanav')

@include('includes.messages')
@include('includes.errors')


 {!! addtexto("Pagos") !!}

 <span>
   * Muestra los primeros {!! $num_mostrado !!} pacientes que mas deben, de mas a menos.
</span>

 <div class="row">
  <div class="col-sm-12">
   <div class="panel panel-default">
    <table class="table">
      <tr class="fonsi16 success">
        <td class="wid50"></td>
        <td class="wid290">Paciente</td>
        <td class="wid110 textcent">Total</td>
        <td class="wid110 textcent">Pagado</td> 
        <td class="wid110 text-danger textcent">Resto</td>
      </tr>
    </table>
   <div class="box400">
   	  <table class="table table-striped">

	   	  	@foreach($pagos as $pago)
		   	  	<tr>
		   	  	  	<td class="wid50">
						         <a href="{!!url("/Pacientes/$pago->idpac")!!}" target="_blank" class="btn btn-default" role="button">
							         <i class="fa fa-hand-pointer-o"></i>
						         </a>
                </td> 

                <td class="wid290">
                  <a href="{!!url("/Pacientes/$pago->idpac")!!}" class="pad4" target="_blank">
                    {!!$pago->surname!!}, {!!$pago->name!!}
                  </a>
                </td>

                <td class="text-info textcent wid110">{!! numformat($pago->total) !!} € </td>
                <td class="text-muted textcent wid110">{!! numformat($pago->paid) !!} € </td>
                <td class="text-danger textcent wid110">{!! numformat($pago->rest) !!} €</td>
		 	 	    </tr>
		 	    @endforeach	

	   </table>

</div> </div> </div> </div>

@endsection