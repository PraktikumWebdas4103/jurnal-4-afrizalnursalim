<?php
if (isset($_POST['submit'])){
	$nama =$_POST['nama'];
	$kelas =$_POST['kelas'];
	$nim =$_POST['nim'];
	$a1 =$_POST['hobi1'];
	$a2 =$_POST['hobi2'];
	$a3 =$_POST['hobi3'];
	$data.=$nama."*".$kelas."*".$nim."*".$a1."*".$a2."*".$a3."||";
}
?>

<h2><center>DATA MAHASISWA</h2><br></center>
<form action=" " method="POST">
	Nama  : <input type="text" name="nama"><br><br>
	Kelas : <input type="text" name="kelas"><br><br>
	Nim   : <input type="text" name="nim"><br><br>
	<p><input type="checkbox" name="hobi1" value="Berenang">Berenang<br></p>
	<p><input type="checkbox" name="hobi2" value="Makan">Makan<br></p>
	<p><input type="checkbox" name="hobi2" value="Makan">Membaca<br></p>
	<p><input type="checkbox" name="hobi3" value="Tidur">Tidur<br></p>
	<p><input type="file" name="foto"><br>
	<p><input type="submit" name="submit" value="Simpan"><br>
<?php 
echo "Nama  : ";
echo $nama;
echo"<br>";
echo "Kelas : ";
echo $kelas;
echo "<br>";
echo "Nim   : ";
echo $nim;
echo "<br>";
echo "Hobi  :";
echo $a1;
