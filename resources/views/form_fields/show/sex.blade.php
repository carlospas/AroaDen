	<div class="col-sm-3 pad4">
		<i class="fa fa-circle-o fa-min"></i> 
    {{ @trans('aroaden.sex') }}: 
     <span class="bggrey pad4">
  		@if( $object->sex == 'male' )

  			{{ @trans('aroaden.male') }}

  		@else

  			{{ @trans('aroaden.female') }}

  		@endif
    </span>
  </div> 