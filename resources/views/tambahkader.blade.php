<!DOCTYPE html>
<html>
<head>
	<title>Menambahkan Identitas Pendamping</title>
</head>
<body>

	<h2>Data Pegawai</h2>

	<a href="/idkader"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/idkader/storekader" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Tanggal Lahir <input type="date" name="ttl_kader" required="required"> <br/>
		Jenis Kelamin <input type="text" name="jenis_kelamin" required="required"> <br/>
		Umur <input type="text" name="umur" required="required"> <br/>
		Alamat <input type="text" name="alamat" required="required"> <br/>
		No Telp <input type="text" name="no_telp" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>