<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/idlansia"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($identitas_lansia as $l)
	<form action="/idlansia/updatelansia" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $l->id_lansia }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $l->nama }}"> <br/>
		Tanggal Lahir <input type="date" required="required" name="tgl_lahir" value="{{ $l->tgl_lahir }}"> <br/>
		Tempat Lahir <input type="text" required="required" name="tempat_lahir" value="{{ $l->tempat_lahir }}"> <br/>
		Jenis Kelamin <input type="text" required="required" name="jenis_kelamin" value="{{ $l->jenis_kelamin }}"> <br/>
		Alamat <input type="text" required="required" name="alamat" value="{{ $l->alamat }}"> <br/>
		No Telp <input type="text" required="required" name="no_telp" value="{{ $l->no_telp }}"> <br/>

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>