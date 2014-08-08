<!-- check for flash success message -->
@if(Session::has('flash_success'))
	<div class="row" id="flash_success">
		<div class="col-lg-6 col-md-6">
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<i class="icon-ok"></i>
				<strong>¡Nice!</strong><br/>
					{{ Session::get('flash_success') }}
			</div>
		</div>
	</div>
@endif

<!-- check for flash notification message -->
@if (Session::has('flash_info'))
	<div class="row" id="flash_info">
		<div class="col-lg-6 col-md-6">
			<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<i class="icon-ok"></i>
				<strong>¡Information!</strong><br/>
					{{ Session::get('flash_info') }}
			</div>
		</div>
	</div>
@endif

<!-- check for flash warning message -->
@if (Session::has('flash_warning'))
	<div class="row" id="flash_warning">
		<div class="col-lg-6 col-md-6">
			<div class="alert alert-warning">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<i class="icon-ok"></i>
				<strong>¡Warning!</strong><br/>
					{{ Session::get('flash_warning') }}
			</div>
		</div>
	</div>
@endif

<!-- check for flash danger message -->
@if (Session::has('flash_danger'))
	<div class="row" id="flash_danger">
		<div class="col-lg-6 col-md-6">
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<i class="icon-ok"></i>
				<strong>¡Error!</strong><br/>
					{{ Session::get('flash_danger') }}
			</div>
		</div>
	</div>
@endif

<!-- check for flash error message -->
@if (Session::has('flash_error'))
	<div class="row" id="flash_danger">
		<div class="col-lg-6 col-md-6">
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<i class="icon-ok"></i>
				<strong>¡Error!</strong><br/>
					{{ Session::get('flash_error') }}
			</div>
		</div>
	</div>
@endif

<script type="text/javascript">
	function loadmessage()
	{
		setTimeout(function() {
		    $('#flash_success').fadeOut('fast');
		    $('#flash_info').fadeOut('fast');
		    $('#flash_warning').fadeOut('fast');
		    $('#flash_danger').fadeOut('fast');
		}, 4000);
	}
	loadmessage();
</script>
