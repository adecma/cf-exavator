@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					{{ $label }}
				</div>

				{!! Form::open(['route' => 'konsultasi.identitas_store', 'class' => 'form-horizontal']) !!}
					<div class="panel-body">	
						<p class="text-center">
							<strong>Masukkan identitas Anda sebelum melanjutkan</strong>
						</p>		

						<hr>

						<div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
							{{ Form::label('nama', 'Nama', ['class' => 'control-label col-sm-4']) }}
								
							<div class="col-sm-6">
								{{ Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Nama anda', 'autocomplete' =>'off']) }}
									
								@if($errors->has('nama'))
									<span class="help-block">
										{{ $errors->first('nama') }}
									</span>
								@endif
							</div>
						</div>	

						<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
							{{ Form::label('email', 'Email', ['class' => 'control-label col-sm-4']) }}
								
							<div class="col-sm-6">
								{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email anda', 'autocomplete' =>'off']) }}
									
								@if($errors->has('email'))
									<span class="help-block">
										{{ $errors->first('email') }}
									</span>
								@endif
							</div>
						</div>	

						<div class="form-group {{ $errors->has('kontak') ? 'has-error' : '' }}">
							{{ Form::label('kontak', 'Kontak', ['class' => 'control-label col-sm-4']) }}
								
							<div class="col-sm-6">
								{{ Form::text('kontak', null, ['class' => 'form-control', 'placeholder' => 'Kontak anda', 'autocomplete' =>'off']) }}
									
								@if($errors->has('kontak'))
									<span class="help-block">
										{{ $errors->first('kontak') }}
									</span>
								@endif
							</div>
						</div>						
					</div>

					<div class="panel-footer">	
						<button type="submit" class="btn btn-primary btn-sm">Selanjutnya</button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection