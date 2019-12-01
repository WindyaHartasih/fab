<html>
<head>
    <title>Submission Page</title>
</head>
<h1>Submission</h1>
	<label name="name">Nama : </label>
	<input type="text" name="name"><br><br>
	<label name="email">Email : </label>
	<input type="text" name="email"><br><br>
	<label name="alamat">Alamat : </label>
	<input type="text" name="alamat"><br><br>
	<label name="notelp">No Telepon : </label>
	<input type="number_format" name="notelp"><br><br>
	<h3>Daftar Nama Barang:</h3>
	<?php include "checkbox.php"; ?>
	<h3>Daftar Gambar Barang:</h3>
	<h3>1. </h3>
	<img src="source.php?id=1" width="160" height="160"/>
	<h3>2. </h3>
	<img src="source.php?id=2" width="160" height="160"/>
	<h3>3. </h3>
	<img src="source.php?id=3" width="160" height="160"/>
	<h3>4. </h3>
	<img src="source.php?id=4" width="160" height="160"/><br><br>
</body>
</html>