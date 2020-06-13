<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/idkader"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($cadres as $k)
	<form action="/idkader/updatekader" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $k->id_kader }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $k->nama }}"> <br/>
		Tanggal Lahir <input type="text" required="required" name="ttl" value="{{ $k->ttl }}"> <br/>
		Jenis Kelamin <input type="text" required="required" name="jenis_kelamin" value="{{ $k->jenis_kelamin }}"> <br/>
		Umur <input type="text" required="required" name="umur" value="{{ $k->umur }}"> <br/>
		Alamat <input type="text" required="required" name="alamat" value="{{ $k->alamat }}"> <br/>
		No Telp <input type="text" required="required" name="no_telp" value="{{ $k->no_telp }}"> <br/>

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>