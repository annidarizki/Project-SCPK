<!DOCTYPE html>
<html>
<head>
	<title>Menambahkan Identitas Lansia</title>
</head>
<body>

	<h2>Data Lansia</h2>

	<a href="/idlansia"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/idlansia/storelansia" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Tanggal Lahir <input type="date" name="tgl_lahir" required="required"> <br/>
		Tempat Lahir <input type="text" name="tempat_lahir" required="required"> <br/>
		Alamat <input type="text" name="alamat" required="required"> <br/>
		Jenis Kelamin <input type="text" name="jenis_kelamin" required="required"> <br/>
		No Telp <input type="text" name="no_telp" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>