<!DOCTYPE html>
<html>
<head>
	<title>Identitas Kader</title>
</head>
<body>


	<h3>Data Identitas Kader</h3>

	<a href="/idkader/tambahkader"> + Tambah Identitas Kader Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>No Telp</th>
		</tr>
		@foreach($identitas_kader as $k)
		<tr>
			<td>{{ $k->nama }}</td>
			<td>{{ $k->ttl_kader }}</td>
			<td>{{ $k->jenis_kelamin }}</td>
			<td>{{ $k->umur }}</td>
			<td>{{ $k->alamat }}</td>
			<td>{{ $k->no_telp }}</td>

			
			<td>
				<a href="/idkader/editkader/{{ $k->id_kader }}">Edit</a>
				|
				<a href="/idkader/hapuskader/{{ $k->id_kader }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>