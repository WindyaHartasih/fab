<?php
 echo "<h2>Keranjang Pembelian</h2>";
 if(!empty($_POST['barang'])){
	 $barang = $_POST['barang'];
	 $i = 0;
	 While($i < sizeof($barang))
	 {
	 echo ($i+1).'. '. $barang[$i] . '</br>';
	 
	 $i++;
	 }
 } else {
			echo '*Pilih paling sedikit satu barang';
		}
 
 ?>
	<form action="bill.php" method="POST">
		   	<input type="submit" name="submit" value="Next"><br><br>
	</form>