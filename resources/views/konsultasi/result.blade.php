@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					{!! $label !!}
					<div class="pull-right">
						<a href="{{ route('konsultasi.cetakpdf', $riwayat->id) }}" class="btn btn-default btn-xs" target="_blank"><i class="fa fa-print"></i></a>
					</div>
				</div>

				<div class="panel-body">
					<h3>A. Identitas</h3>
					<dl class="dl-horizontal">
						<dt>Nama</dt>
						<dd>{{ $riwayat->nama }}</dd>
						<dt>Email</dt>
						<dd>{{ $riwayat->email }}</dd>
						<dt>Kontak</dt>
						<dd>{{ $riwayat->kontak }}</dd>
					</dl>

					<h3>B. Gejala yang dipilih</h3>

					<ul>
						@foreach($gejalas as $gejala)
							<li>{{ $gejala->nama }}</li>
						@endforeach
					</ul>

					<h3>C. Nilai CF</h3>
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Penyakit</th>
									<th>CF</th>
								</tr>
							</thead>
							<tbody>
								@foreach($result as $data)
									<tr>
										<td>{{ $no++ }}</td>
										<td>
											{{ $data['kerusakan_nama'] }} <br>
											# Gejala : <br>
											<ul>
												@foreach($data['gejala_get'] as $gejala)
													<li>{{ $gejala->gejala->nama }}</li>
												@endforeach
											</ul>
										</td>
										<td>{{ $data['cf'] }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>

					<h3>D. Diagnosa</h3>
					<dl class="dl-horizontal">
						<dt>Kerusakan</dt>
						<dd>{{ $kesimpulan['kerusakan_nama'] }}</dd>
						<dt>Kepastian</dt>
						<dd>{{ $kesimpulan['kepastian'] }}</dd>
						<dt>Nilai CF</dt>
						<dd>{{ $kesimpulan['cf'] }}</dd>
						<dt>Solusi</dt>
						<dd>
							@foreach($kesimpulan['gejala_get'] as $data)
								{{ $data->solusi->nama }}.
							@endforeach
						</dd>
					</dl>
				</div>				
			</div>
		</div>
	</div>
@endsection