<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/identitas"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($companions as $p)
	<form action="/identitas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_companions }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>