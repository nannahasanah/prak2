<?php

include 'koneksi.php';
if (isset($_GET['edit'])) {
	$sql = "SELECT * from user where id=" . $_GET['edit'];

	$result = $conn->query($sql);

	$nama ='';
	$kelas = '';
	$nim = '';

	if ($result->num_rows > 0){

		while($row = $result-> fetch_assoc()) {

			$nama = $row["nama"];
			$kelas = $row["kelas"];
			$nim = $row["nim"];
		}
	}

?>
<form method="GET" action="">
	<input type="hidden" name="id" value="<?=$_GET['edit']?>">

	<table border="1">
		<tr>
			<th>nama</th>
			<th><input type="text" name="nama" value="<?=$nama?>"></th>
		</tr>
		<tr>
			<th>kelas</th>
			<th><input type="text" name="kelas" value="<?=$kelas?>"></th>
		</tr>
		<tr>
			<th>nim</th>
			<th><input type="text" name="nim" value="<?=$nim?>"></th>
		</tr>
		<tr>
			<th colspan="2"> <button type="submit"> simpan</button></th>
		</tr>

	</table>
</form>
<?php
}
if (isset($_GET['id'])){
	$sql = "update user set nama='".$_GET['nama']."',kelas='".$_GET['kelas']."',nim='".$_GET['nim']."'
	where id = '".$_GET['id']."'";
	if ($conn->query($sql)) echo "berhasil mengedit";
}
$conn->close();
?>