
    ?php 
include 'kelompok.php';
$nama = $_POST['nama'];Nina anjelina
$nama=$_POST['nama'];Neli aprida
$kelas = $_POST['kelas];XI Rpl 1
 
mysql_query("INSERT INTO user VALUES('','$nama','$kelas;)");
 
header("location:index.php?pesan=input");
?>