<div class="form-group col-sm-2">
	<label class="control-label text-left mar10">{{ @trans('aroaden.units') }}</label>    
	
	@if( $autofocus == 'units' )
		<input type="number" min="1" value="1" step="1" name="units" class="form-control" autofocus required>
	@else
		<input type="number" min="1" value="1" step="1" name="units" class="form-control" required>
	@endif

</div>