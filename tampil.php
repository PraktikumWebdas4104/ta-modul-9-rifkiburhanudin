<?php 
include 'database.php';
$db = new database(); //isi dengan deklarasi method
?>
<h1>CRUD OOP PHP</h1>
<h3>Data User</h3>

<a href="input.php">Input Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Usia</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	$tampung = $db->tampil_data();
	if(is_array($tampung)|| is_object($tampung)){
	foreach($db->tampil_data() as $x){ //panggil method tampil data dari class database
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['alamat']; ?></td>
		<td><?php echo $x['usia']; ?></td>
		<td><?php echo $X['film']; ?></td>
		<td><?php echo $X['wisata']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>



