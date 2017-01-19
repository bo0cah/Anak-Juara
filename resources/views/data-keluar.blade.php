@extends('layouts.master')

@section('title')
	Data Keluar
@endsection

@section('content')
	<h2>Data Keluar</h1>
		<div class="row">
        <div class="col-md-10 col-md-offset-2">
            <form action="" class="form-inline">
                <div class="input-group input-lg" style="width: 60%">
                    <input type="text" class="form-control input-md" placeholder="Pencarian...">
                    <span class="input-group-btn">
                        <button class="btn btn-default btn-md" type="button"><i class="glyphicon glyphicon-search"></i> Cari</button>
                    </span>
                </div><!-- /input-group -->
                <a href="{{ url('/pengajuan-baru') }}">
                    <button class="btn btn-default btn-md" type="button">Pengajuan Baru</button>
                </a>
            </form>
        </div>
    </div><br>

    <table class="table table-striped table-bordered table-hover">
			<tr class="primary">
				<th>No.</th>
				<th>Nama</th>
				<th>Jenjang Pendidikan</th>
				<th>Nama Fundraiser</th>
				<th>Opsi</th>
			</tr>
			@for($baris=0; $baris < 30; $baris++)
			<tr class="warning">
				<td>{{ $no=$baris+1 }}</td>
				<td>Abdul</td>
				<td>SD</td>
				<td>Ahmad</td>
				<td>
					<a href="">
						<kbd >
							Profil
						</kbd>
					</a>
				</td>
			</tr>
			@endfor
		</table>
	
@endsection