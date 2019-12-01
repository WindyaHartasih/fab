<html>
<?php
// include database connection 
include "db_connect.php"; 
 
$query ="select id, name, harga from images";
$sql = mysqli_query($conn,$query);
	if (mysqli_num_rows($sql) > 0) {
		while($row = mysqli_fetch_assoc($sql)){
			$id=array($row['id'].".");
			$nama=array($row['name']);
			$harga=array($row['harga']);
						$str_id = implode(' ', $id);
						$str_nama = implode(' ', $nama);
						$str_harga = implode(' ', $harga);
						$str=$str_id." ".$str_nama." ".$str_harga; 
?>
		   <form action="details.php" method="POST">
		   <input type="checkbox" name="barang[]" value=<?php echo $str_nama?>><?php echo $str_nama?><br>
	<?php
		}
	}
	?>
	<input type="submit" name="submit" value="Submit"><br><br>
	</form>
</body>
</html>