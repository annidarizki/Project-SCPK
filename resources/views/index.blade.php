<!DOCTYPE html>
<html>
<head>
	<title>Identitas Pendamping</title>
</head>
<body>


	<h3>Data Identitas Pendamping</h3>

	<a href="/identitas/tambah"> + Tambah Identitas Pendamping Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
		</tr>
		@foreach($identitas_pendamping as $p)
		<tr>
			<td>{{ $p->nama }}</td>
			
			<td>
				<a href="/identitas/edit/{{ $p->id_pendamping }}">Edit</a>
				|
				<a href="/identitas/hapus/{{ $p->id_pendamping }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>