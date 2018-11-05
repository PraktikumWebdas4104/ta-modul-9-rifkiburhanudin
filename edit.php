<?php 
include 'database.php';
$db = new database(); //isi dengan deklarasi method
?>

<h1>Edit data </h1>


<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){ //panggil method edit dari class database
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
	</tr>
	<tr>
		<td>Genre Film</td>
		<td>
			<input type="checkbox" name="film[]" value="Horror" <?php if(in_array('Horror', $array1)){echo "checked=checked";} ?> >Horror <br>
			<input type="checkbox" name="film[]" value="Action" <?php if(in_array('Action', $array1)){echo "checked=checked";} ?> >Action <br>
			<input type="checkbox" name="film[]" value="Anime" <?php if(in_array('Anime', $array1)){echo "checked=checked";} ?> >Anime  <br>
			<input type="checkbox" name="film[]" value="Thriller" <?php if(in_array('Thriller', $array1)){echo "checked=checked";} ?> >Thriller <br>
			<input type="checkbox" name="film[]" value="Animasi" <?php if(in_array('Animasi', $array1)){echo "checked=checked";} ?> >Animasi <br>
		</td>
	</tr>
	<tr>
		<td>wisata
		</td><td>
			<input type="checkbox" name="wisata[]" value="Bali" <?php if(in_array('Bali', $array2)){echo "checked=checked";} ?> >Bali <br>
		<input type="checkbox" name="wisata[]" value="Raja Ampat" <?php if(in_array('Raja ampat', $array2)){echo "checked=checked";} ?> >Raja Ampat <br>
		<input type="checkbox" name="wisata[]" value="Pulau Derawan" <?php if(in_array('Pulau Derawan', $array2)){echo "checked=checked";} ?> >Pulau Derawan <br>
		<input type="checkbox" name="wisata[]" value="Bangka belitung" <?php if(in_array('Bangka belitung', $array2)){echo "checked=checked";} ?> >Bangka Belitung <br>
		<input type="checkbox" name="wisata[]" value="Labuan bajo" <?php if(in_array('Labuan Bajo', $array2)){echo "checked=checked";} ?> >Labuan Bajo <br>
		</td>

	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>
