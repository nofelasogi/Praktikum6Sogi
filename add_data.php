<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
<form action="<?php $SERVER['PHP_SELF'];?>" method="post">
	<table>
		<tr>
			<td>NIS</td>
			<td><input type="text" name="nis" /></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="nama" size=40 /></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>
</body>
</html>
<?php
require_once "./connect.php";

if (isset($_POST['nis'])&& isset($_POST['nama'])){
	$nis    = $_POST['nis'];
	$nama   = $_POST['nama'];
	$alamat = $_POST['alamat'];


$sql ="INSERT INTO tb_siwa VALUES ('".$nis."','".$nama."','".$alamat."' )";
$result = mysqli_query($connect,$sql);
if ($result){
	echo 'Data Berhasil Ditambahkan';
}
else{
	echo 'Gagal Menambahkan Data <br />';
	echo mysqli_error($connect);
}
}
echo '<hr />';

require_once"./record.php";
?>