<!DOCTYPE html>
<html>
<head>
	<title>Identitas Lansia</title>
</head>
<body>


	<h3>Data Identitas Lansia</h3>

	<a href="/idlansia/tambahlansia"> Tambah Identitas Lansia Baru</a>
	
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
		@foreach($identitas_lansia as $l)
		<tr>
			<td>{{ $l->nama }}</td>
			<td>{{ $l->tgl_lahir }}</td>
			<td>{{ $l->tempat_lahir }}</td>
			<td>{{ $l->alamat }}</td>
			<td>{{ $l->jenis_kelamin }}</td>
			<td>{{ $l->no_telp }}</td>

			
			<td>
				<a href="/idlansia/editlansia/{{ $l->id_lansia }}">Edit</a>
				|
				<a href="/idlansia/hapuslansia/{{ $l->id_lansia }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>