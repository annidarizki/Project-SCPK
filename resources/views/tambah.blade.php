<!DOCTYPE html>
<html>
<head>
	<title>Menambahkan Identitas Pendamping</title>
</head>
<body>

	<h2>Data Pegawai</h2>

	<a href="/identitas"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/identitas/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>