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
		@foreach($companions as $p)
		<tr>
			<td>{{ $p->nama }}</td>
			
			<td>
				<a href="/identitas/edit/{{ $p->companions_id }}">Edit</a>
				|
				<a href="/identitas/hapus/{{ $p->companions_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>